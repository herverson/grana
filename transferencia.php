<?php include'menu.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tranferência</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="page-header">
<h1>Transferência</h1>
</div>

<form id="form1" name="form1" method="post" action="salva_transfe.php">

<div class="form-group">
<div class="container-fluid">
    <table width="518" height="156" border="0">
    <tr>
      <td width="204"><label for="agencia">Sua conta<br />
        Agência:<br />
      </label>
      <input name="agencia" type="text" class="form-control" id="agencia" /></td>
      <td width="96">&nbsp;</td>
      <td width="204"><label for="agencia2"> Transferir para<br />
        Agência:<br />
      </label>
      <input name="agencia2" type="text" class="form-control" id="agencia2" /></td>
    </tr>
    <tr>
      <td><label for="conta">Conta:<br />
      </label>
      <input name="conta" type="text" class="form-control" id="conta" /><br /></td>
      <td>&nbsp;</td>
      <td>
        <label for="conta2">Conta:</label>

          <input name="conta2" type="text" class="form-control" id="conta2" />
          <label for="conta2"><br />
          </label>
        </td>
    </tr>
    <tr>
      <td >
        <label class="sr-only" for="valor">Valor (em reais)</label>
        <div class="input-group">
          <div class="input-group-addon">R$</div>
          <input name="valor" type="text" class="form-control" id="valor" placeholder="Valor">
          <div class="input-group-addon">.00</div>
          </div><br />
      </td>
      <td >&nbsp;</td>
      </tr>
    <tr>
      <td height="45" colspan="3"><input name="Enviar" class="btn btn-primary" type="submit" id="enviar" value="Realizar tranferência" /></td>
      </tr>
  </table>
  </div>
  </div>
</form>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
