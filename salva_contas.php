<?php
include('conexao.php');
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$saldo = $_POST['saldo'];
$situ = $_POST['situacao'];
$cod_cli = $_POST['cod_cli'];
$clientes = "SELECT * FROM clientes WHERE codigo ='$cod_cli'";
    mysqli_query($dbc, $clientes) 
	or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/contas.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao buscar dados.\");
	</script>");
$sql_quant = mysqli_query($dbc,$clientes);
$linha=mysqli_fetch_array($sql_quant);

	if($linha['codigo']==$cod_cli)
	{		  
		$query = "INSERT INTO contas (agencia, conta, saldo, situacao, cod_cli) VALUES ('$agencia', '$conta', '$saldo', '$situ', '$cod_cli')";
			echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
			<script type=\"text/javascript\">
			alert(\"Cadastro realizado com sucesso.\");
			</script>";
			mysqli_query($dbc, $query)
			or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/contas.php'>
			<script type=\"text/javascript\">
			alert(\"Erro ao inserir dados.\");
			</script>");
	}
	else
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/contas.php'>
			<script type=\"text/javascript\">
			alert(\"Não possui cadastro.\");
			</script>";

	}//fecha banco
	 mysqli_close($dbc); 
?>