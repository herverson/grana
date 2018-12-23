<?php
include('conexao.php');
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$agencia2 = $_POST['agencia2'];
$conta2 = $_POST['conta2'];
$valor = $_POST['valor'];

$contas = "SELECT * FROM contas WHERE conta='$conta' AND agencia='$agencia'";
mysqli_query($dbc, $contas) 
	or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao buscar dados.\");
	</script>");
$contas2 = "SELECT * FROM contas WHERE conta='$conta2' AND agencia='$agencia2'";
    mysqli_query($dbc, $contas2) 
	or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
	<script type=\"text/javascript\">
	alert(\"Erro ao buscar dados.\");
	</script>");
$sqlcontas = mysqli_query($dbc,$contas);
$linha=mysqli_fetch_array($sqlcontas);

$sqlcontas2 = mysqli_query($dbc,$contas2);
$linha2=mysqli_fetch_array($sqlcontas2);

$saldo_total = $linha['saldo'] - $valor;

$saldo_total2 = $linha2['saldo'] + $valor;


if($linha['conta']==$conta && $linha2['conta']==$conta2){
	if($linha['saldo']>=$valor){
		$query = "UPDATE contas SET saldo='$saldo_total' WHERE conta='$conta';";
			/*echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
			<script type=\"text/javascript\">
			alert(\"Transferencia realizada com sucesso.\");
			</script>";*/
		mysqli_query($dbc, $query)
			or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
			<script type=\"text/javascript\">
			alert(\"Erro ao inserir dados.\");
			</script>");
			
		$query2 = "UPDATE contas SET saldo='$saldo_total2' WHERE conta='$conta2' AND agencia='$agencia2';";
			echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/listar_contas.php'>
			<script type=\"text/javascript\">
			alert(\"Transferido.\");
			</script>";
		mysqli_query($dbc, $query2)
			or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
			<script type=\"text/javascript\">
			alert(\"Erro ao inserir dados.\");
			</script>");
	}else{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
			<script type=\"text/javascript\">
			alert(\"Não possui saldo o suficiente.\");
			</script>";
	}


}else{
	echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
			<script type=\"text/javascript\">
			alert(\"Não possui conta.\");
			</script>";
}
/*else{
	echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/grana++/transferencia.php'>
			<script type=\"text/javascript\">
			alert(\"Não possui conta.\");
			</script>";
}*/
//fecha banco
	 mysqli_close($dbc); 
?>