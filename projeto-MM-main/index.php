
<?php

	define('__BASE__', 'projeto-MM-main');

	require_once 'CLASSES/usuario.php';
	$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto MM</title>
	<link rel="stylesheet" href="CSS/estilo.css?v=<?php echo time();?>">
	<meta name="viewport" content="width=device-width">
</head>
<body>

<?php
	
	$uri = explode('/', $_SERVER['REQUEST_URI']);
	$uri = (end($uri) === '') ? 'login' : end($uri);
	
	if(file_exists('pages/'.$uri.'.php')){
		
		include 'pages/'.$uri.'.php';
		
	}else{
		
		echo '404 Não Encontrado';
		
	}
	
?>

</body>
</html>