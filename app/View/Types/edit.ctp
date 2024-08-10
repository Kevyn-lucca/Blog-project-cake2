<h1>Edit Type</h1>
<form id="formTypeEdit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo: </label>
        <input type="text" class="form-control" name="data[Type][title]" id="exampleInputEmail1"
            aria-describedby="emailHelp" value="<?= $types['Type']['title'] ?>">
    </div>
</form>
<button type="button" class="btn btn-primary" onclick="editType(<?= $types['Type']['id'] ?>)">Enviar</button>

