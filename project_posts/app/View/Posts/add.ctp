<form id="postAdForm">
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="body">Body</label>
        <textarea id="body" name="body" required rows="3" cols="30"></textarea>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="addPost()">Adicionar</button>
</form>