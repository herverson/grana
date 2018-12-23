<?php
include('conexao.php');
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$tele = $_POST['telefone'];
$situ = $_POST['situ'];

$sql = "UPDATE clientes SET nome='$nome', cpf='$cpf', endereco='$endereco', telefone='$tele', situacao='$situ' WHERE codigo='$codigo';";

 mysqli_query($dbc, $sql)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_cli.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao editar.\");
	</script>");
	if($sql)
	{
echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_cli.php'>
	<script type=\"text/javascript\">
	alert(\"Resistro atualizado com sucesso.\");
	</script>";
	}
	 mysqli_close($dbc); 
?>