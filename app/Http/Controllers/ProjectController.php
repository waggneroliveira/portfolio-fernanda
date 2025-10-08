<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProjectRequestStore;
use App\Http\Requests\ProjectRequestUpdate;
use App\Repositories\SettingThemeRepository;
use App\Http\Controllers\Helpers\HelperArchive;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class ProjectController extends Controller
{
    protected $pathUpload = 'admin/uploads/project/image/';
    public function index(Request $request)
    {
        $settingTheme = (new SettingThemeRepository())->settingTheme();

        if(
            !Auth::user()->hasRole('Super') && 
            !Auth::user()->can('usuario.tornar usuario master') && 
            !Auth::user()->hasPermissionTo('noticias.visualizar')
        ){
            return view('admin.error.403', compact('settingTheme'));
        }

        $categories = ProjectCategory::active()->sorting()->get();

        // Query base
        $projectsQuery = Project::with([
            'category'
        ]);

        // 🔎 Aplicar filtros
        if ($request->filled('title')) {
            $projectsQuery->where('name_project', 'like', '%' . $request->name_project . '%');
        }

        if ($request->filled('project_category_id')) {
            $projectsQuery->where('project_category_id', $request->project_category_id);
        }

        // Paginação
        $projects = $projectsQuery->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        // Array simples de categorias [id => title]
        $projectCategory = [];
        foreach ($categories as $category) {
            $projectCategory[$category->id] = $category->title;
        }
        return view('admin.blades.project.index', compact(
            'projects', 
            'categories', 
            'projectCategory',
            'settingTheme'
        ));
    }

    public function create(){
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        if(!Auth::user()->hasRole('Super') && 
          !Auth::user()->can('usuario.tornar usuario master') &&  
          !Auth::user()->hasPermissionTo('noticias.visualizar') &&
          !Auth::user()->hasPermissionTo('noticias.criar')){
            return view('admin.error.403', compact('settingTheme'));
        }

        $categories = ProjectCategory::active()->sorting()->get();

        $projectCategory = [];

        foreach ($categories as $category) {
            $projectCategory[$category->id] = $category->title;
        }

        return view('admin.blades.project.create', compact('categories', 'projectCategory'));
    }

    public function edit(Project $project){
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        if(!Auth::user()->hasRole('Super') && 
          !Auth::user()->can('usuario.tornar usuario master') && 
          !Auth::user()->hasPermissionTo('noticias.visualizar') && 
          !Auth::user()->hasPermissionTo('noticias.editar')){
            return view('admin.error.403', compact('settingTheme'));
        }

        $categories = ProjectCategory::active()->sorting()->get();
        $projectCategory = [];

        foreach ($categories as $category) {
            $projectCategory[$category->id] = $category->title;
        }
        return view('admin.blades.project.edit', compact('project', 'categories', 'projectCategory'));
    }

    public function store(ProjectRequestStore $request)
    {
        $data = $request->all();
        $data['active'] = $request->active ? 1 : 0;
        $data['slug'] = Str::slug($request->name_project);

        $manager = new ImageManager(new GdDriver());

        // Imagem principal
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = Str::uuid() . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::disk('public')->putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($this->pathUpload . $filename, $image);
            }

            $data['path_image'] = $this->pathUpload . $filename; 
        }

        try {
            DB::beginTransaction();
                Project::create($data);
            DB::commit();

            session()->flash('success', __('dashboard.response_item_create'));
            return redirect()->route('admin.dashboard.project.index');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', __('dashboard.response_item_error_create'));
            return redirect()->back();
        }
    }
    public function uploadImageCkeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $mime = $file->getMimeType();

            // Nome do arquivo sem extensão + .webp
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';

            // Caminho de armazenamento
            $pathUpload = 'uploads/project_images/';

            $manager = ImageManager::gd(); // ou ->imagick() se preferir

            if ($mime === 'image/svg+xml') {
                // Apenas copiar o SVG sem conversão
                Storage::disk('public')->putFileAs($pathUpload, $file, $filename);
            } else {
                // Converter em WEBP
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($pathUpload . $filename, $image);
            }

            $url = asset('storage/' . $pathUpload . $filename);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => 0,
            'error' => ['message' => 'Upload falhou.']
        ]);
    }
    public function update(ProjectRequestUpdate $request, project $project)
    {
        $data = $request->all();
        $data['active'] = $request->active ? 1 : 0;
        $data['slug'] = Str::slug($request->name_project);

        $manager = new ImageManager(new GdDriver());

        // Imagem principal
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = Str::uuid() . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::disk('public')->putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($this->pathUpload . $filename, $image);
            }

            if (!empty($project->path_image)) {
                Storage::disk('public')->delete($project->path_image);
            }

            $data['path_image'] = $this->pathUpload . $filename; 
        }

        if ($request->has('delete_path_image')) {
            if (!empty($project->path_image)) {
                Storage::disk('public')->delete($project->path_image);
            }
            $data['path_image'] = null;
        }
        try {
            DB::beginTransaction();
            $project->fill($data)->save();
            DB::commit();

            session()->flash('success', __('dashboard.response_item_update'));
            return redirect()->route('admin.dashboard.project.index');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', __('dashboard.response_item_error_update'));
            return redirect()->back();
        }
    }
    public function destroy(project $project)
    {
        Storage::delete(isset($project->path_image)??$project->path_image);
        $project->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $projectId) {
            $project = Project::find($projectId);
    
            if ($project) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($project)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $projectId,
                            'name_project' => $project->name_project,
                            'title' => $project->title,
                            'slug' => $project->slug,
                            'path_image' => $project->path_image,
                            'texto' => $project->text,
                            'sorting' => $project->sorting,
                            'active' => $project->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $projectId não encontrado.");
            }
        }
    
        $deleted = Project::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $project = Project::find($id);
    
            if ($project) {
                $project->sorting = $sorting;
                $project->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($project) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($project)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'name_project' => $project->name_project,
                            'title' => $project->title,
                            'slug' => $project->slug,
                            'path_image' => $project->path_image,
                            'texto' => $project->text,
                            'sorting' => $project->sorting,
                            'active' => $project->active,
                            'event' => 'order_updated',
                        ]
                    ])
                    ->log('order_updated');
            } else {
                \Log::warning("Item com ID $id não encontrado.");
            }
        }
    
        return Response::json(['status' => 'success']);
    }
}
