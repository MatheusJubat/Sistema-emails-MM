
<!doctype html>

<?php

	define('__BASE__', 'projeto-MM-main/area_privada');

	require_once '../CLASSES/usuario.php';
	$u = new Usuario();

?>
<html>
<head>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<title>Área Privada</title>
</head>

<style>
	
	body, html{margin: 0; font-family: 'Roboto', sans-serif;}
	body{padding: 50px;}
	
	h1{
		
		margin: 0;
		font-size: 3.5rem;
		
	}
	
	h2{
		
		margin: 0;
		font-size: 2.8rem;
		
	}
	
	h3{
		
		margin: 0;
		font-size: 2rem;
		
	}
	
	a{
		text-decoration: none;
		color: inherit;
	}
	
	section#privada{
		
		display: grid;
    	grid-template-columns: 400px 1fr;
		column-gap: 50px;
		
	}
	section#privada nav.menu{
		
		display: flex;
		flex-direction: column;
		font-size: 1.2rem;
		row-gap: 20px;
		
	}
	section#privada nav.menu a{
		
		padding: 15px 30px;
		color: #fff;
		background-color: #444;
		
	}
	section#privada .main{
		
		display: flex;
		flex-direction: column;
		row-gap: 20px;
		
	}
	section#privada .main article.inline{
		
		padding: 20px;
		background-color: #444;
		color: #fff;
		
	}
	section#privada .main article.inline a{
		
		display: flex;
		column-gap: 20px;
		font-size: 1.2rem;
		align-items: center;
		
	}
	
	section#privada .main form#escrever{
		
		display: flex;
		row-gap: 20px;
		column-gap: 20px;
		flex-wrap: wrap;
		justify-content: flex-end;
		
	}
	section#privada .main form#escrever :is(input, textarea){
		
		flex: 0 0 100%;
		border: 0;
		background-color: #444;
		color: #fff;
		padding: 15px 20px;
		font: inherit;
		font-size: 1.2rem;
		box-sizing: border-box;
		
	}	
	section#privada .main form#escrever :is(input, textarea)::placeholder{
		
		color: #fff;
		
	}
	section#privada .main form#escrever textarea{
		
		min-height: 300px;
		resize: vertical;	
		
	}
	button{
		
		border: 0;
		padding: 10px 20px;
		font: inherit;
		cursor: pointer;
		background-color: #444;
		color: #fff;
		box-sizing: border-box;
		
	}
	button.hollow{
		
		border: 3px solid #444;
		color: #444;
		font-weight: bold;
		background-color: #fff;
		
	}
	
</style>

<body>

<?php

	
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
    	header("location: index.php");
    	exit;
    }

?>

<section id="privada">
	
	<nav class="menu">
		
		<a href="/<?php echo __BASE__ ?>/escrever">Novo Email</a>
		<a href="/<?php echo __BASE__ ?>/entrada">Caixa de Entrada</a>
		<a href="/<?php echo __BASE__ ?>/enviados">Enviados</a>
		<a href="/<?php echo __BASE__ ?>/lixeira">Lixeira</a>
		<a href="/<?php echo __BASE__ ?>/rascunho">Rascunhos</a>
		<a href="../pages/sair"> Sair </a>
		
	</nav>
	
	<div class="main">
		
		<?php

			$uri = explode('/', $_SERVER['REQUEST_URI']);
			$uri = end($uri);

			if(file_exists('pages/'.$uri.'.php')){

				include 'pages/'.$uri.'.php';

			}else{
				
				include 'pages/entrada.php';
				
			}

		?>
		
	</div>
	
</section>

</body>
</html>