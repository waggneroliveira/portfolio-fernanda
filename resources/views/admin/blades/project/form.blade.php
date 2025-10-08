<div class="col-12 col-lg-6">
    <div class="row">
        <div class="mb-3 col-12">
            <label for="name_project" class="form-label">Nome do projeto <span class="text-danger">*</span></label>
            <input type="text" name="name_project" class="form-control" id="name_project{{isset($project->id)?$project->id:''}}" value="{{isset($project)?$project->name_project:''}}" required placeholder="Digite seu nome">
        </div>

        <div class="mb-3 col-12 col-lg-12 d-flex align-items-start flex-column">
            <label for="category-select" class="form-label">Categoria(s) <span class="text-danger">*</span></label>
            @php
                $currentCategory = isset($project) ? $project->project_category_id : null;
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
    
    <div class="mb-3 col-12">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" id="title{{isset($project->id)?$project->id:''}}" value="{{isset($project)?$project->title:''}}" placeholder="Digite seu nome">
    </div>
    
    <div class="mb-3 col-12 d-flex align-items-start flex-column">
        <label for="textarea-edit" class="form-label">Texto </label>
        <textarea name="text" class="form-control col-12" id="textarea-edit" rows="5">
            {!!isset($project)?$project->text:''!!}
        </textarea>
    </div>
        <div class="mb-3">
        <div class="form-check">
            <input name="active" {{ isset($project->active) && $project->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($project->id)?$project->id:''}}" />
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
                <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($project)?$project->path_image<>''?url('storage/'.$project->path_image):'':''}}"  />
                <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
            </div>
        </div>
        
    </div>
</div>

