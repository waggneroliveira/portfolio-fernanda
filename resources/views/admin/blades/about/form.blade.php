<div class="col-12 col-lg-6">    
    <div class="mb-3 col-12">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" id="title{{isset($about->id)?$about->id:''}}" value="{{isset($about)?$about->title:''}}" placeholder="Título">
    </div>
    <div class="mb-3 col-12">
        <label for="subtitle" class="form-label">Subtitulo</label>
        <input type="text" name="subtitle" class="form-control" id="subtitle{{isset($about->id)?$about->id:''}}" value="{{isset($about)?$about->subtitle:''}}" placeholder="Subtitulo">
    </div>
    
    <div class="mb-3 col-12 d-flex align-items-start flex-column">
        <label for="textarea-edit" class="form-label">Texto</label>
        <textarea name="text" class="form-control col-12" id="textarea-edit" rows="5">
            {!!isset($about)?$about->text:''!!}
        </textarea>
    </div>
        <div class="mb-3">
        <div class="form-check">
            <input name="active" {{ isset($about->active) && $about->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($about->id)?$about->id:''}}" />
            <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-lg-6">
    <div class="row">
        <div class="col-12">
            <div class="mt-3">
                <label for="path_image" class="form-label">Imagem</label>
                <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($about)?$about->path_image<>''?url('storage/'.$about->path_image):'':''}}"  />
                <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
            </div>
        </div>
    </div>
</div>

