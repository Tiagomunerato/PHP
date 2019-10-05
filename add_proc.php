<?php
include "conecta.php";//inclui o arquivo de conexao

//inicio teste post (form para incluir)
if(isset($_POST['btn']))//testa se btn (name do botao submit) foi clicado
{
	$aut = $_POST['txtautor'];
	$msg = $_POST['txtmsg'];
	$sql = "
		INSERT INTO tb_mensagens
		(autor, mensagem)
		VALUES
		('$aut', '$msg')
		";
}
//fim teste post
//inicio teste get (link para deletar)
if(isset($_GET['idm']))//testa se endereco possui a variavel idm
{
	$id = $_GET['idm'];
	$sql = "
		DELETE FROM tb_mensagens
		WHERE id_mensagem=$id
		";
}
//fim teste get


$result = mysqli_query($con, $sql);//realiza a consulta correta
if(mysqli_affected_rows($con)>0)//testa se houve alteracao no banco
{
	header("Location: index.php");//redireciona para index
}
else
{
	echo "Falha! " . mysqli_error($con);//exibe o erro
}
?>