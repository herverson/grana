<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" class="active" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="clientes.php">Cliente</a></li>
            <li><a href="contas.php">Contas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar_cli.php">Cliente</a></li>
            <li><a href="listar_contas.php">Contas</a></li>
          </ul>
        </li>
        <li><a href="deposito.php">Depósito</a></li>
        <li><a href="saque.php">Saque</a></li>
        <li><a href="transferencia.php">Transferência</a></li>
        
      </ul>
</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>

<footer class="footer navbar-inverse"">
      <div class="container">
        <p class="text-muted">Grana++ © 2018 Todos os direitos reservados</p>
      </div>
</footer>