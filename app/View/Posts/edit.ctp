<h1>Edit Post</h1>
<form id="formPostEdit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo: </label>
        <input type="text" class="form-control" name="data[Post][title]" id="exampleInputEmail1"
            aria-describedby="emailHelp" value="<?= $posts['Post']['title'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Body</label>
        <div class="form-floating">
            <textarea class="form-control"  name="data[Post][body]"
                id="floatingTextarea2" style="height: 100px"><?= h($posts['Post']['body']) ?></textarea>
        </div>
    </div>
    <div class= "mb-3">
    <select name="data[Post][type_id]" id="data[Post][type_id]" class="form-select" aria-label="Default select example">
            <option selected>Escolha um tipo</option>
            <?php foreach ($types as $type): ?>
            <option value="<?=$type['Type']['id']?>"><?= $type['Type']['title']?></option>
            <?php endforeach; ?>    
        </select>
    </div>
</form>
<button type="button" class="btn btn-primary" onclick="editpost(<?= $posts['Post']['id'] ?>)">Enviar</button>

