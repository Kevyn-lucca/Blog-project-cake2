<h1 class="text-center">Adicionar post</h1>
<form id="postAdForm">
    <div class="mb-3">
        <label for="title">Titulo:</label>
        <input class="form-control" type="text" id="title" name="title" required>
    </div>
    <div class= "mb-3">
        <label for="body">Texto:</label>
        <textarea style="height: 100px" class="form-control" id="body" name="body" required rows="3" cols="30"></textarea>
    </div>
    <div class= "mb-3">
        <select name="type_id" id="type_id" class="form-select" aria-label="Default select example">
            <option selected>Escolha um tipo</option>
            <?php foreach ($types as $type): ?>
            <option value="<?=$type['Type']['id']?>"><?= $type['Type']['title']?></option>
            <?php endforeach; ?>    
        </select>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    <button type="button" class="btn btn-primary" onclick="addPost()">Adicionar</button>
</form>
