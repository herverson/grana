<?php
include('conexao.php');
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$saldo = $_POST['saldo'];
$situ = $_POST['situacao'];
$cod_cli = $_POST['cod_cli'];


$sql = "UPDATE contas SET agencia='$agencia', conta='$conta', saldo='$saldo', situacao='$situ', cod_cli='$cod_cli' WHERE conta='$conta';";

 mysqli_query($dbc, $sql)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao editar.\");
	</script>");
	if($sql)
	{
echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
	<script type=\"text/javascript\">
	alert(\"Resistro atualizado com sucesso.\");
	</script>";
	}
	 mysqli_close($dbc); 
?>