<input type="hidden" name="project_id" value="{{isset($project) ? $project->id : ''}}">
<div class="mb-3 mt-3">
    <div class="fileInputPreview">
        <img class="preview-file-img" src="" alt="Pré-visualização">
        <label for="fileInput" class="labelInput">
            <i class="bx bx-upload"></i>
            <h5 class="fileText">Clique para fazer upload</h5>
            <p class="fileDescription">Carregar imagens com no máximo de 2mb</p>
        </label>
        <button class="btn btn-secondary removeFile">Remover</button>
        <div class="wrap-input">
            <input type="file" id="fileInput" name="path_image[]" class="fileInput" multiple onchange="updateFileCount(this)">
        </div>
    </div>
</div>
{{-- <label for="imageInput" class="custom-file-upload">Selecionar Arquivos</label>
<input id="imageInput" name="file[]" type="file" multiple onchange="updateFileCount(this)" /> --}}
<span id="fileCount">Nenhum arquivo selecionado</span>
<button type="submit" class="btn btn-secondary waves-effect waves-light float-end mb-3 me-0 width-lg align-items-left">Enviar</button>

<script>
    function updateFileCount(input) {
        var count = input.files.length;
        var fileCountText = count + (count === 1 ? ' arquivo selecionado' : ' arquivos selecionados');
        document.getElementById('fileCount').innerText = fileCountText;
    }
</script>