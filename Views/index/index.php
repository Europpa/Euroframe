<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EuroSystem</title>
</head>
<body>
	<h1>Frame MVC</h1>
	Conexiones: <br>
	<span>Conexión: <?php echo $this->mensaje; ?><span><br><br>
	Modulos: <br>
	<span>Version de apache: <?php echo $this->apache; ?></span><br>
	<span>Mod_rewrite: <?php echo $this->mod_rw; ?></span> 

	<?php phpinfo(); ?>
</body>
</html>