<div class = "d-flex flex-column text-center">
<h1><?php echo h($post['Post']['title']); ?></h1>
<p><small>feito em: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>
</div>