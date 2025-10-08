<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectGallery;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class ProjectGalleryController extends Controller
{
    protected $pathUploadImage = 'admin/uploads/project-gallery/images';
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $files = $request->file('path_image');

            if (!$files || !is_array($files)) {
                throw new \Exception('Nenhum arquivo foi enviado.');
            }

            foreach ($files as $file) {
                $mimeType = $file->getMimeType();
                $fileName = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();

                // Define subpasta com base no tipo do arquivo
                if (str_starts_with($mimeType, 'image/')) {
                    $folder = $this->pathUploadImage ?? 'uploads/images';
                } elseif (str_starts_with($mimeType, 'video/')) {
                    $folder = $this->pathUploadVideo ?? 'uploads/videos';
                } else {
                    // Ignora tipos não permitidos
                    continue;
                }

                // Armazena o arquivo no Storage (pasta public)
                $path = $file->storeAs($folder, $fileName, 'public');

                // Cria o registro na galeria
                ProjectGallery::create([
                    'project_id' => $request->gallery_id,
                    'path_image' => $path,
                    'active' => 0,
                ]);
            }

            DB::commit();

            Session::flash('success', 'Arquivos enviados com sucesso!');
            return redirect()->back();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao enviar arquivos: ' . $e->getMessage());
        }
    }

    public function destroy(ProjectGallery $projectGallery)
    {
        Storage::delete(isset($projectGallery->path_image) ? $projectGallery->path_image : '');
        $projectGallery->delete();

        Session::flash('success','Arquivo(s) deletado com sucesso!');
        return redirect()->route('admin.dashboard.galleryApprovalRequest');
    }

    public function destroySelected(Request $request)
    {
        if($deleted = ProjectGallery::whereIn('id', $request->deleteAll)->delete()){
            return Response::json
            (
                [
                    'status' => 'success',
                    'message' => $deleted.' itens deletados com sucessso!'
                ]
            );
        }
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id){
            ProjectGallery::where('id', $id)->update(['sorting' => $sorting]);
        }
        return Response::json(['status' => 'success']);
    }
}
