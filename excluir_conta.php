<?php
include "conexao.php";

$conta= $_GET['conta'];

$sql = "DELETE FROM contas WHERE conta='$conta';";

$resultado = mysqli_query($dbc, $sql);

if ($resultado){
header("location:listar_contas.php");

}else{
echo"Erro";
header("location:listar_contas.php");
}


?>