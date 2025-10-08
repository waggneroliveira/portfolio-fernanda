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
<span id="fileCount" class="text-white">Nenhum arquivo selecionado</span>

<button type="submit" class="btn btn-secondary waves-effect waves-light float-end mb-3 me-0 width-lg align-items-left">Enviar</button>

<style>
    .fileInputPreview {
    position: relative;
    border: 2px dashed #ccc;
    border-radius: 12px;
    background-color: #fafafa;
    text-align: center;
    padding: 30px 20px;
    transition: all 0.3s ease;
}

.fileInputPreview:hover {
    border-color: #6c757d;
    background-color: #f5f5f5;
}

.labelInput {
    display: block;
    cursor: pointer;
    color: #6c757d;
    transition: color 0.3s ease;
}

.labelInput:hover {
    color: #343a40;
}

.labelInput i {
    font-size: 2.5rem;
    display: block;
    margin-bottom: 10px;
    color: #6c757d;
}

.fileText {
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.fileDescription {
    font-size: 0.9rem;
    color: #888;
    margin-bottom: 0;
}

.fileInput {
    display: none;
}

.preview-file-img {
    display: none;
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid #ddd;
    margin-bottom: 15px;
}

.fileInputPreview.has-image .preview-file-img {
    display: inline-block;
}

.removeFile {
    display: none;
    margin-top: 10px;
    font-size: 0.9rem;
}

.fileInputPreview.has-image .removeFile {
    display: inline-block;
}

#fileCount {
    display: inline-block;
    margin-top: 10px;
    font-size: 0.95rem;
    color: #555;
}

</style>
<script>
    function updateFileCount(input) {
        var count = input.files.length;
        var fileCountText = count + (count === 1 ? ' arquivo selecionado' : ' arquivos selecionados');
        document.getElementById('fileCount').innerText = fileCountText;
    }
</script>