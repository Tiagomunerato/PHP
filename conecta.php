<?php
$comp = "localhost";//site, ip ou computador
$usuario = "root";
$senha = "";
$banco = "minicurso";//nome do banco de dados
$con = mysqli_connect($comp, $usuario, $senha, $banco);//string de conexao
if(!$con)//testa por erro na conexao
{
	echo mysqli_connect_error();//exibe o erro de conexao
}
mysqli_set_charset($con, 'utf8');//define o tipo de caracter como utf8
?>