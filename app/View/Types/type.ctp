<div class="mb-4">
    <button type="button" class="btn btn-primary" onclick="buscarTypeAdd()">
        Add
    </button>
</div>
<div style="overflow: auto; max-height: 260px;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($types as $type): ?>
    <tr>
      <th scope="row"><?= $type['Type']['id']?></th>
      <td><?= $type['Type']['title']?></td>
      <td><?= $type['Type']['created']?></td>
      <td>         
        <button class="btn btn-danger" onclick="DeleteType(<?= $type['Type']['id'] ?>)">
            Delete
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="buscarTypesEdit(<?= $type['Type']['id'] ?>)">
            Editar
        </button></td>
        <?php endforeach; ?>
    </tr>
  </tbody>
</table>
</div>