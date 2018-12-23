<?php
include('conexao.php');
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$valor = $_POST['valor'];
echo $valor;

$contas = "SELECT * FROM contas WHERE conta='$conta' AND agencia='$agencia'";
    mysqli_query($dbc, $contas) 
	or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/contas.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao buscar dados.\");
	</script>");
$sqlcontas = mysqli_query($dbc,$contas);
$linha=mysqli_fetch_array($sqlcontas);
$saldo_total = $linha['saldo'] + $valor;

if($contas){
			  
		$query = "UPDATE contas SET saldo='$saldo_total' WHERE conta='$conta';";
			echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
			<script type=\"text/javascript\">
			alert(\"Deposito realizado com sucesso.\");
			</script>";
		mysqli_query($dbc, $query)
			or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/deposito.php'>
			<script type=\"text/javascript\">
			alert(\"Erro ao inserir dados.\");
			</script>");
}
else{
	echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/deposito.php'>
			<script type=\"text/javascript\">
			alert(\"Não possui conta.\");
			</script>";
}
//fecha banco
	 mysqli_close($dbc); 
?>