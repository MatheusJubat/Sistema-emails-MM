<?php 
//require_once 'pages/emails.php';
//$e = new Emails 
?>

<h1>Novo Email</h1>

<form action="post" id="escrever">
	
  	<input type="text" name="dest" placeholder="Destinatario">
	<input type="text" name="ass" placeholder="Assunto">
	<input type="text" name="cont" placeholder="Conteudo">
	<textarea name="message" placeholder="Sua Mensagem"></textarea>
	<button name="send">Enviar</button>
	<button name="archive" class="hollow">Arquivar</button>
	

<?php 
//if(isset($_POST['dest']))
/*{
$dest = addslashes($_POST['Destinatario']);
	$ass = addslashes($_POST['Assunto']);
	$cont = addslashes($_POST['Conteudo']); 
	if (!empty($dest) && !empty($ass) &&!($cont) &&!($message))
	{
		$e->conectar("projeto_mm2","localhost","root","");	
		if($e->msgErro == "")
		{
			if($e->escrever($dest,$ass,$cont,$message))
			{
				echo "Email Enviado";
			}
			else
			{
				echo "Email não corresponde ou não existe!";
			}
		}
		else
		{
			echo "Erro: ".$u->msgErro;
		}
	}else
	{
		echo "preencha todos os campos!";
	}
*/
?>

</form>