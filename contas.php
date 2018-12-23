<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro contas</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="page-header">
<h1>Cadastro de contas</h1>
</div>
<form id="form1" name="form1" method="post" action="salva_contas.php">
<div class="form-group">
<div class="container-fluid">
    <table width="238" height="156" border="0">
    <tr>
      <td><label for="agencia">Agência:<br />
      </label>
      <input name="agencia" type="text" class="form-control" id="agencia" placeholder="Agência"/></td>
    </tr>
    <tr>
      <td><label for="conta">Conta:<br />
      </label>
      <input name="conta" type="text" class="form-control" id="conta" placeholder="Conta"/></td>
    </tr>
    <tr>
      <td><p>
        <label for="saldo">Saldo:</label>
      </p>
        <p>
          <input name="saldo" type="text" class="form-control" id="saldo" placeholder="Saldo"/>
      </p></td>
    </tr>
    <tr>
      <td><p>
        <label for="situacao">Situação:</label>
        </p>
        <p>
          <input name="situacao" type="text" class="form-control" id="situacao" placeholder="Situação"/>
      </p></td>
    </tr>
    <tr>
      <td><label for="cod_cli">Código do cliente:</label>
      <input name="cod_cli" type="text" class="form-control" id="cod_cli" placeholder="Código do cliente"/><br /></td>
    </tr>
    <tr>
      <td height="45"><input name="Enviar" class="btn btn-primary" type="submit" id="enviar" value="Cadastrar" /></td>
    </tr>
  </table>
  </div>
  </div>
</form>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>