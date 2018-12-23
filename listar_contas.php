<?php include'menu.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contas</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="page-header">
<h1>Contas</h1>

</div>
<?php require_once "conexao.php" ?>
<div class="container-fluid">
	<div class="row">
    	<div class="col-lg-10">

    <table class="table table-bordered table-hover">
      <tr>
        <td>Agencia</td>
        <td>Conta:</td>
        <td>Saldo R$:</td>
        <td>Situação</td>
        <td>Código do cliente</td>
        <td>Ação:</td>
      </tr>
    
     <?php
     
     $query = "SELECT * FROM contas";
      $result = mysqli_query($dbc, $query);
      while ($linha = mysqli_fetch_array($result)) {
    
    ?>
      <tr>
        <td><?php $agencia = $linha["agencia"]; echo "$agencia<br>"; ?></td>
        <td><?php $conta = $linha["conta"]; echo "$conta<br>"; ?></td>
        <td>
          R$ <?php $saldo = $linha["saldo"]; echo "$saldo<br>"; ?></td>
        <td>
          <?php $situ = $linha["situacao"]; echo "$situ<br>"; ?>
        </td>
        <td>
          <?php $cod_cli = $linha["cod_cli"]; echo "$cod_cli<br>"; ?>
        </td>
        <td><?php echo "<a class=btn btn-link href=editar_conta.php?conta=".$linha['conta'].">Editar</a>"; ?>
        <?php echo "<a class=btn btn-link  href=excluir_conta.php?conta=".$linha['conta'].">Exluir</a>";  ?></td>
    
    </tr>
    <?php
    }
    ?>
    </table>
</div>
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>