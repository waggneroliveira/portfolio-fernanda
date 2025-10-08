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
                                <li class="breadcrumb-item "><a href="{{route('admin.dashboard.project.index')}}">Projetos</a></li>
                                <li class="breadcrumb-item active">Cadastrar Projeto</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Projetos</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <form action="{{route('admin.dashboard.project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="name_project" class="form-label">Nome do projeto <span class="text-danger">*</span></label>
                                    <input type="text" name="name_project" class="form-control" id="name_project{{isset($project->id)?$project->id:''}}" value="{{isset($project)?$project->name_project:''}}" required placeholder="Digite seu nome">
                                </div>
                                <div class="mb-3 col-12 d-flex align-items-start flex-column">
                                    <label for="category-select" class="form-label">Categoria(s) <span class="text-danger">*</span></label>
                                    @php
                                        $currentCategory = isset($project) ? $project->project_category : null;
                                    @endphp
                                
                                    <select name="project_category_id" class="form-select" id="category-select" required>
                                        <option value="" disabled selected>Selecione a categoria</option>
                                        @foreach ($projectCategory as $categoryValue => $categoryLabel)
                                            <option value="{{ $categoryValue }}" {{ $categoryValue == $currentCategory ? 'selected' : '' }}>
                                                {{ $categoryLabel }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
        
                            <div class="mb-3">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Digite seu nome">
                            </div>
                            
                            <div class="mb-3 col-12 d-flex align-items-start flex-column">
                                <label for="textarea-create" class="form-label">Texto</label>
                                <textarea name="text" class="form-control col-12" id="textarea-create" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input name="active" type="checkbox" class="form-check-input" id="invalidCheck{{isset($project->id)?$project->id:''}}" />
                                    <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="mt-3">
                                        <label for="path_image" class="form-label">Imagem de capa</label>
                                        <input type="file" name="path_image" data-plugins="dropify" />
                                        <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
                                    </div>
                                </div>
                            </div>                            
                            
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_create')}}</button>
                            </div>                                                 
                        </div>
                    </div>
                </form> 
            </div> <!-- fecha a row aberta -->

        </div> <!-- fecha container-fluid -->
    </div> <!-- fecha content -->
</div> <!-- fecha content-page -->

<!-- Modal de confirmação -->
<div class="modal fade" tabindex="-1" role="dialog" id="agenda-alert" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"> 
        <div class="modal-content text-center p-3">
            <div class="modal-body">
                <div class="mb-3">
                    <i class="bi bi-question-circle-fill text-warning" style="font-size: 3rem;"></i>
                </div>

                <h5 class="modal-title mb-3">Cadastrar na Agenda?</h5>
                <p class="text-muted">Deseja cadastrar esta notícia também na Agenda de Eventos?</p>
            </div>

            <div class="modal-footer border-0 justify-content-center">
                <!-- Botão SIM: abre o outro modal -->
                <button type="button" class="btn btn-primary text-black" data-bs-toggle="modal" data-bs-target="#event-create" data-bs-dismiss="modal">
                    <i class="bi bi-check-circle text-black"></i> Sim
                </button>

                <!-- Botão NÃO: apenas fecha -->
                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{route('admin.dashboard.project.index')}}">
                        <i class="bi bi-x-circle"></i> Não
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Inicializa o CKEditor para o textarea de criação
    CKEDITOR.replace('textarea-create', {
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