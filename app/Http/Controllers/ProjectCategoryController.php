<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\SettingThemeRepository;
use App\Http\Requests\ProjectCategoryRequest;
use App\Http\Requests\ProjectCategoryRequestUpdate;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        if(!Auth::user()->hasRole('Super') && 
          !Auth::user()->can('usuario.tornar usuario master') && 
          !Auth::user()->hasPermissionTo('categorias do noticias.visualizar')){
            return view('admin.error.403', compact('settingTheme'));
        }

        $projectCategories = ProjectCategory::sorting()->get();

        return view('admin.blades.projectCategory.index', compact('projectCategories'));
    }

    public function store(ProjectCategoryRequest $request)
    {
        $data = $request->all();
        $data['active'] = $request->active?1:0;
        $data['slug'] = Str::slug($request->title);

        try {
            DB::beginTransaction();
                ProjectCategory::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();            
            Alert::error('error', __('dashboard.response_item_error_create'));
            return redirect()->back();
        }
    }

    public function update(ProjectCategoryRequestUpdate $request, ProjectCategory $projectCategory)
    {
        $data = $request->all();
        $data['active'] = $request->active?1:0;
        $data['slug'] = Str::slug($request->title);

        try {
            DB::beginTransaction();
                $projectCategory->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', __('dashboard.response_item_error_update'));
            return redirect()->back();
        }
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

        public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $projectCategoryId) {
            $projectCategory = ProjectCategory::find($projectCategoryId);
    
            if ($projectCategory) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($projectCategory)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $projectCategoryId,
                            'title' => $projectCategory->title,
                            'slug' => $projectCategory->slug,
                            'sorting' => $projectCategory->sorting,
                            'active' => $projectCategory->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $projectCategoryId não encontrado.");
            }
        }
    
        $deleted = ProjectCategory::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $projectCategory = ProjectCategory::find($id);
    
            if ($projectCategory) {
                $projectCategory->sorting = $sorting;
                $projectCategory->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($projectCategory) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($projectCategory)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'title' => $projectCategory->title,
                            'slug' => $projectCategory->slug,
                            'sorting' => $projectCategory->sorting,
                            'active' => $projectCategory->active,
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
