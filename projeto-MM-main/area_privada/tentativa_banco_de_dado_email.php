<?php 
 Class Emails
{
	private $pdo;
	private $msgErro = "";

	private function escreve($remetente, $destinatario, $titulo, $conteudo, $status)
	{
	global $pdo;
	try{
		$pdo = new PDO("mysql:dbname=".$remetente."$destinatario=".$destinatario,
			$titulo,$conteudo, $status);

		} catch (PDOException $t) {
				$msgErro = $t->getMessage();
		}
	}
	private function escrever($destinatario, $assunto, $mensagem)
	{
		global $pdo;
	}
			//verificar se o email existe
		}
		$sql = $pdo->prepare("SELECT id_usuario FROM emails WHERE titulo = :t");
		$sql->bindvalue(":d",destinatario);

		$sql = $pdo->query("INSERT INTO email(destinatario, titulo, conteudo, assunto,)VALUES(:d, :t, :c, :a)");
			return true;
		}*/ 
	}
			//enviar o email
	private function enviar($destinatario,$assunto,$mensagem,$titulo)
	$sql = $pdo->query("SELECT titulo FROM emails WHERE destinatario = :d");
	$sql->execute();
	if($sql->rowcount() > 0)
	{
		$envio = $sql fetch();
		session_start();
		return true; //enviado com sucesso ao destinatario
	}
	else
	}
		return false; //nao enviado (email nao existente)
	}
}
