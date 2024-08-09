<div class="mb-4">
    <button type="button" class="btn btn-primary" onclick="buscarPostsAdd()">
        Add
    </button>
</div>
<div style="overflow: auto; max-height: 260px;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Tipo</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
    <tr>
      <th scope="row"><?= $post['Post']['id']?></th>
      <td>
      <button class="btn p-0" onclick="LoadPost(<?= $post['Post']['id'] ?>)">
        <?= $post['Post']['title']?></td>
    </button>
      <td><?= $post['Type']['title']?></td>
      <td><?= $post['Post']['created']?></td>
      <td>         
        <button class="btn btn-danger" onclick="CallDeletePost(<?= $post['Post']['id'] ?>)">
            Delete
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="buscarPostsEdit(<?= $post['Post']['id'] ?>)">
            Editar
        </button></td>
        <?php endforeach; ?>
    </tr>
   
  </tbody>
</table>
</div>