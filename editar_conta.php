<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Editar conta</title>
</head>

<body>
<?php
require_once "conexao.php";

$conta = $_GET['conta'];

$sql = 'SELECT * FROM contas WHERE conta='.$conta;

$resultado = mysqli_query($dbc, $sql);

$linha = mysqli_fetch_array($resultado);

?>
<div class="page-header">
<h1>Editar conta</h1>

</div>

<form id="form1" name="form1" method="post" action="salva_edit_contas.php">
<div class="form-group">
<div class="container-fluid">
  <table width="271" height="156" border="0">
    <tr>
      <td><label for="agencia">Agência<br />
      </label>
        <input name="agencia" type="text" class="form-control" id="agencia" value="<?php echo $linha['agencia'];  ?>" /></td>
    </tr>
    <tr>
      <td width="265"><label for="conta">Conta:</label>
      <input name="conta" type="text" class="form-control" id="conta"  value="<?php echo $linha['conta'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="saldo">Saldo:</label>
      <input name="saldo" type="text" class="form-control" id="saldo"  value="<?php echo $linha['saldo'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="situacao">Situação:</label>
        <input name="situacao" type="text" class="form-control" id="situacao" value="<?php echo $linha['situacao'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="cod_cli">Código cliente:</label>
          <input name="cod_cli" type="text" class="form-control" id="cod_cli"  value="<?php echo $linha['cod_cli'];  ?>"/><br /></td>
    </tr>
    <tr>
      <td><input type="submit" class="btn btn-primary" name="enviar" id="enviar" value="Editar" /></td>
    </tr>
  </table>
  </div>
  </div>
</form>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>