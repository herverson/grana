<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Editar cliente</title>
</head>

<body>
<?php
require_once "conexao.php";

$codigo = $_GET['codigo'];

$sql = 'SELECT * FROM clientes WHERE codigo='.$codigo;

$resultado = mysqli_query($dbc, $sql);

$linha = mysqli_fetch_array($resultado);

?>
<div class="page-header">
<h1>Editar cliente</h1>
</div>

<form id="form1" name="form1" method="post" action="salva_edit_cli.php">
<div class="form-group">
<div class="container-fluid">
  <table width="238" height="156" border="0">
    <tr>
      <td><label for="codigo">Código do cliente</label>
        <input name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $linha['codigo'];  ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="208"><label for="nome2">Nome:</label>
      <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o nome completo" value="<?php echo $linha['nome'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="cpf">CPF:</label>
      <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Digite o CPF" value="<?php echo $linha['cpf'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="endereco">Endereço:</label>
      <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Digite o endereço" value="<?php echo $linha['endereco'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="telefone">Telefone:</label>
      <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone para contato" value="<?php echo $linha['telefone'];  ?>" /></td>
    </tr>
    <tr>
      <td><label for="situ">Situação:</label>
      <input name="situ" type="text" class="form-control" id="situ" placeholder="Situação do cliente" value="<?php echo $linha['situacao'];  ?>"/><br /></td>
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