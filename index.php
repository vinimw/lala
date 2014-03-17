<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Teste News</title>
	</head>
	<body>
		<?php
			$usuario = end(explode('/',$_SERVER['PHP_SELF']));
			$usuario = current(explode('_',$usuario));
		?>
		<h1>Olá <i><?php echo ucfirst($usuario) ?></i></h1>
	</body>
</html>