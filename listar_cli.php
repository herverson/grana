<?php include'menu.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clientes</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="page-header">
<h1>Clientes</h1>
</div>
<?php require_once "conexao.php" ?>
<div class="container-fluid">
	<div class="row">
    	<div class="col-lg-10">

    <table class="table table-bordered table-hover">
      <tr>
        <td>Código:</td>
        <td>Nome:</td>
        <td>CPF:</td>
        <td>Endereço:</td>
        <td>Telefone:</td>
        <td>Situação:</td>
        <td>Ação:</td>
      </tr>
    
     <?php
     
     $query = "SELECT * FROM clientes";
      $result = mysqli_query($dbc, $query);
      while ($linha = mysqli_fetch_array($result)) {
    
    ?>
      <tr>
        <td><?php $codigo = $linha["codigo"]; echo "$codigo<br>"; ?></td>
        <td><?php $nome = $linha["nome"]; echo "$nome<br>"; ?>    </td>
        <td>
          <?php $cpf = $linha["cpf"]; echo "$cpf<br>"; ?>
        </td>
        <td>
          <?php $endereco = $linha["endereco"]; echo "$endereco<br>"; ?>
        </td>
        <td>
          <?php $telefone = $linha["telefone"]; echo "$telefone<br>"; ?>
        </td>
        <td>
          <?php $situacao = $linha["situacao"]; echo "$situacao<br>"; ?>
        </td>
        <td><?php echo "<a class=btn btn-link  href=editar_cli.php?codigo=".$linha['codigo'].">Editar</a>";  ?>
        <?php echo "<a class=btn btn-link  href=excluir_cli.php?codigo=".$linha['codigo'].">Exluir</a>";  ?></td>
    
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