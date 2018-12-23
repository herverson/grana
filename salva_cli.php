<?php
include('conexao.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$tele = $_POST['telefone'];
$situ = $_POST['situ'];
	  
$query = "INSERT INTO clientes (nome, cpf, endereco, telefone, situacao)  VALUES ('$nome', '$cpf', '$endereco', '$tele', '$situ')";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/clientes.php'>
	<script type=\"text/javascript\">
	alert(\"Erro.\");
	</script>");
	if($query)
	{
echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/clientes.php'>
	<script type=\"text/javascript\">
	alert(\"Cadastro realizado com sucesso.\");
	</script>";
	}
	 mysqli_close($dbc); 
?>