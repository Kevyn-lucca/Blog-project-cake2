<!DOCTYPE html>
<html>
<head>
	<title>Meu blog </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar justify-content-between bg-primary">
  <div class="d-flex justify-content-between">
    <a class="navbar-brand text-white" href="#">
      <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
	   Meu Blog
	</a>
	<button onclick="CallTypePage()">tipos</button>
  </div>
</nav>
</header>
	<main class="m-4">
	<section>
	<?php echo $this->fetch('content'); ?>
	</section >
	<section>
	<div class="d-flex justify-content-center flex-column" id="PostContent"></div>
	</section>
	</main>
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"
		integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script src="app/webroot/js/app_chamada.js"></script>
</body>
</html>