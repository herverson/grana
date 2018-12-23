<?php
include "conexao.php";

$codigo= $_GET['codigo'];

$sql = "DELETE FROM clientes WHERE codigo='$codigo';";

$resultado = mysqli_query($dbc, $sql);

if ($resultado){
header("location:listar_cli.php");

}else{
echo"Erro";
header("location:listar_cli.php");
}


?>