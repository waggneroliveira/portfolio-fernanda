@extends('admin.core.admin')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('admin.dashboard.project.index')}}">Projetos</a></li>
                                <li class="breadcrumb-item active">Editar Projeto</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Projeto</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12 text-end">
                    <button type="button" class="btn btn-primary text-black waves-effect waves-light col-lg-2 col-12" data-bs-toggle="modal" data-bs-target="#gallery-create">
                        <i class="mdi mdi-plus-circle me-1"></i> Cadastrar galeria
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="gallery-create" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 980px;">
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_create')}}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body p-2 px-3 px-md-4">
                                <form action="{{route('admin.dashboard.projectGallery.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')

                                    @include('admin.blades.projectGallery.form')  
                                </form>

                                <div class="col-12 mt-3">
                                    <button id="btSubmitDelete" data-route="{{route('admin.dashboard.projectGallery.destroySelected')}}" type="button" class="btSubmitDelete btn btn-danger" style="display: none;">{{__('dashboard.btn_delete_all')}}</button>
    
                                    @if ($galleryInages->count() > 0)                                    
                                        <div class="table-responsive col-12">
                                            <table class="table-sortable table table-centered table-nowrap table-striped">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="bs-checkbox">
                                                            <label><input name="btnSelectAll" type="checkbox"></label>
                                                        </th>
                                                        <th>Imagem</th>
                                                        <th style="width: 85px;">Ações</th>
                                                    </tr>
                                                </thead>
            
                                                <tbody data-route="{{route('admin.dashboard.projectGallery.sorting')}}">
                                                    @foreach ($galleryInages as $key => $gellery)
                                                        <tr data-code="{{$gellery->id}}">
                                                            <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                            <td class="bs-checkbox">
                                                                <label><input data-index="{{$key}}" name="btnSelectItem" class="btnSelectItem" type="checkbox" value="{{$gellery->id}}"></label>
                                                            </td>
                                                            <td class="table-user text-center">
                                                                @if ($gellery->path_image)
                                                                    <img src="{{ asset('storage/'.$gellery->path_image) }}" name="path_image" alt="table-user" class="me-2 rounded-circle">
                                                                @endif
                                                            </td>
                                                            <td class="d-flex gap-lg-1 justify-center">
                                                                <form action="{{route('admin.dashboard.projectGallery.destroy',['projectGallery' => $gellery->id])}}" style="width: 30px" method="POST">
                                                                    @method('DELETE') @csrf        
                                                                    
                                                                    <button type="button" style="width: 30px"class="demo-delete-row btn btn-danger btn-xs btn-icon btSubmitDeleteItem"><i class="fa fa-times"></i></button>
                                                                </form>  
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <form action="{{ route('admin.dashboard.project.update', ['project' => $project->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        @include('admin.blades.project.form')    
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                        <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_save')}}</button>
                    </div>                                                                                                                                                                                            
                </form>
            </div> <!-- fecha a row aberta -->

        </div> <!-- fecha container-fluid -->
    </div> <!-- fecha content -->
</div> <!-- fecha content-page -->

<script>
    // Inicializa o CKEditor para o textarea de criação
    CKEDITOR.replace('textarea-edit', {
        allowedContent: true,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'] },
            { name: 'paragraph', items: [
                'NumberedList', 'BulletedList', '-', 
                'Outdent', 'Indent', '-', 
                'Blockquote', '-', 
                'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'
            ] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize'] }
        ],
        filebrowserUploadUrl: "{{ route('admin.dashboard.project.uploadImageCkeditor') }}",
        fileTools_requestHeaders: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });

</script>
@endsection