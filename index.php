<?php
include "conecta.php";
?>
<html>
<body>
	<a href="add_form.php">Nova Mensagem</a>
	<table border="1" align="center">
		<tr>
			<td colspan="5">
				<h2>Lista de mensagens</h2>
			</td>
		</tr>
		<tr style="font-weight: bold;">
			<td>id</td>
			<td>autor</td>
			<td>mensagem</td>
			<td>datahora</td>
			<td>DEL</td>
		</tr>
		
<?php
	$sql = "
		SELECT * 
		FROM tb_mensagens 
		ORDER BY datahora ASC
		";
	$result = mysqli_query($con, $sql);
	if(!$result)//testa por erro na consulta
	{
		echo mysqli_error($con);
	}
	else //exibe os resultados
	{
		while($linha = mysqli_fetch_array($result))
		{
			echo "
				<tr>
					<td>$linha[0]</td>
					<td>$linha[1]</td>
					<td>$linha[2]</td>
					<td>$linha[3]</td>
					<td>
					<a href='add_proc.php?idm=$linha[0]'>
						<img src='img/del.png' />
					</a>
					</td>
				</tr>
				";
		}
	}
?>

	</table>
</body>
</html>