<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" name="title" class="form-control" id="title{{isset($topic->id)?$topic->id:''}}" value="{{isset($topic)?$topic->title:''}}" placeholder="Digite seu nome">
</div>

<div class="mb-3">
    <label for="description-{{isset($topic) ? $topic->id : ''}}" class="form-label">Descrição</label>
    <textarea name="description" id="description-{{isset($topic) ? $topic->id : ''}}" cols="30" rows="10">
        {!!isset($topic)?$topic->description:''!!}
    </textarea>
</div>

<div class="mb-3">
    <div class="form-check">
        <input name="active" {{ isset($topic->active) && $topic->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($topic->id)?$topic->id:''}}" />
        <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
    </div>
</div>

