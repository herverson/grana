<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saque</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="page-header">
<h1>Saque</h1>
</div>

<form id="form1" name="form1" method="post" action="salva_saque.php">

<div class="form-group">
<div class="container-fluid">
    <table width="238" height="156" border="0">
    <tr>
      <td><label for="agencia">Agência:<br />
      </label>
      <input name="agencia" type="text" class="form-control" id="agencia" /></td>
    </tr>
    <tr>
      <td><label for="conta">Conta:<br />
      </label>
      <input name="conta" type="text" class="form-control" id="conta" /><br /></td>
    </tr>
    <tr>
      <td>
		<label class="sr-only" for="valor">Valor (em reais)</label>
        <div class="input-group">
          <div class="input-group-addon">R$</div>
          <input name="valor" type="text" class="form-control" id="valor" placeholder="Valor">
          <div class="input-group-addon">.00</div>
        </div><br />
		</td>
    </tr>
    <tr>
      <td height="45"><input name="Enviar" class="btn btn-primary" type="submit" id="enviar" value="Realizar saque" /></td>
    </tr>
  </table>
  </div>
  </div>
</form>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>