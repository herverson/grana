<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Cadastro clientes</title>
</head>

<body>
<div class="page-header">
<h1>Cadastro de clientes</h1>
</div>

<form id="form1" name="form1" method="post" action="salva_cli.php">
<div class="form-group">
<div class="container-fluid">
  <table width="238" height="156" border="0">
    <tr>
      <td width="208"><label for="nome2">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome completo" /></td>
    </tr>
    <tr>
      <td><label for="cpf">CPF:</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF" /></td>
    </tr>
    <tr>
      <td><label for="endereco">Endereço:</label>
      <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço" /></td>
    </tr>
    <tr>
      <td><label for="telefone">Telefone:</label>
      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone para contato" /></td>
    </tr>
    <tr>
      <td><label for="situ">Situação:</label>
      <input type="text" name="situ" class="form-control" id="situ" placeholder="Situação do cliente"/><br /></td>
    </tr>
    <tr>
      <td><input type="submit" class="btn btn-primary" name="enviar" id="enviar" value="Enviar" /></td>
    </tr>
  </table>
  </div>
  </div>
</form>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>