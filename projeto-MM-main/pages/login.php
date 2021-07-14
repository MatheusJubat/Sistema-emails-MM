<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST">
		<input type="email" placeholder="Usuário" name="email">
		<input type="password" placeholder="Senha" name="senha">
		<input type="submit" value="ACESSAR">
		<a href="/<?php echo __BASE__ ?>/cadastrar">Não tem cadastro?<strong>Cadastre-se!</strong>
	</form>
</div>
<?php
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if(!empty($email) && !empty($senha))
	{
		$u->conectar("projeto_mm2","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: area_privada");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}
?>