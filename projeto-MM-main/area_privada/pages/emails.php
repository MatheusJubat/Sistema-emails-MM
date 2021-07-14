//$sql = "EXPLAIN SELECT * FROM `emails`;";
<?php
try {
 	
 } catch (Exception $d) {
 	
 } {

	$pdo = new PDO("mysql:dbname=projeto_mm2,host=localhost","root","")

}catch (PDOException $d){
	echo "Erro banco de dados: ".$->getMessage();
}
catch(exception $d)
{
	echo "Erro generico: ".$d->getMessage();
}

//insert email
$res = $pdo->prepare("INSERT INTO emails (destinatario, titulo, conteudo, assunto)VALUES (:d, :t, :c, :a)");
$res->bindValue(":d","matheus@gmail.com");
$res->bindValue(":t","titulo");
$res->bindValue(":c","texto");
$res->bindValue(":a","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
$res->execute();


/*delete
$pdo->query("insert into emails(destinatario, titulo, conteudo, assunto)");
Deletar
$res = $pdo ->query("DELETE FROM emails where id = '' ");
//update 
$cmd = $pdo->query("UPDATE emails SET destinatario = '' WHERE titulo = '' WHERE assunto = '' WHERE conteudo = '' ");
//select

$cmd = $pdo->prepare("SELECT * FROM emails WHERE destinatario = :d WHERE titulo = :t WHERE conteudo :c WHERE assusnto :a");
$cmd->bindvalue(":d","");
$cmd->bindvalue(":t","");
$cmd->bindvalue(":c","");
$cmd->bindvalue(":a","");
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);
?>
   //$query = "SELECT * FROM table WHERE id='the id you want'"; 
    //$result = mysql_query($query) or die(mysql_error());     (https://stackoverflow.com/questions/8784279/emails-not-saving-to-mysql)



*\