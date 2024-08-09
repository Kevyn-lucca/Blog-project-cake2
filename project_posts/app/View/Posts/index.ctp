<?php
	include('MainModalPost.ctp');
?>
    <div class="mb-4">
        <button type="button" class="btn btn-primary" onclick="buscarPostsAdd()">
            Add
        </button>
    </div>
<div class="row">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-center gap-2 ">
                    <button class="btn p-0" onclick="LoadPost(<?= $post['Post']['id'] ?>)">
                        <h3><?php echo $post['Post']['title']?></h3>
                    </button>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger" onclick="deletePost(<?= $post['Post']['id'] ?>)">
                            Delete
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                            onclick="buscarPostsEdit(<?= $post['Post']['id'] ?>)">
                            Editar
                        </button>
                    </div>
                    <small class="text-muted">Criado em: <?php echo $post['Post']['created']; ?></small>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
