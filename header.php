<?php 
session_start(); 

if(!isset($_SESSION["perfil"]) || !isset($_SESSION["id"]) 
        || !isset($_SESSION["nome"]) 
        || !isset($_SESSION["logado"]) ){
    
    session_destroy();
    echo "<script>";
    echo "location.href='index?m=".
        base64_encode("Error, acesso invalido!!")."'";
    echo "</script>";
    exit;
}else if($_SESSION["logado"] + 10 * 60  < time()){
    session_destroy();
    echo "<script>";
    echo "location.href='index?m=".
        base64_encode("Error,tempo expirou")."'";
    echo "</script>";
    exit;
}else{
    $_SESSION["logado"] = time();
}

?>  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eletronic:Cupom System</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <header><img src="img/marcar-maza.png" width="320" ></header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="painel"><i class="fa fa-home"></i></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class=""></i><i class="fa fa-user-plus"></i></i> Novos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cadastrar-clientes">Cliente</a></li>
            <?php if($_SESSION["perfil"] == "ADMIN"){ ?>
            <li><a href="cadastrar-promocao">Promoção</a></li>
             <?php } ?>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open"></i> Consultas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <?php // if($_SESSION["perfil"] == "ADMIN"){ ?>
              <li><a href="listar-clientes">Contatos</a></li>
            <li class="divider"></li>
            <li><a href="listar-enderecos">Endereços</a></li>
            <li class="divider"></li>
            <li><a href="listar-cupons">Cupom</a></li>
            <li class="divider"></li>
            <li><a href="listar-nf.php">Nota Fiscal</a></li>
           <?php // } ?>
          </ul>
        </li> <?php if($_SESSION["perfil"] == "ADMIN"){ ?>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-bar-chart"></i> Relatórios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">         
            <li class="divider"></li>
            <li><a href="#">Download</a></li>
            <li class="divider"></li>
            <li><a href="#">Gráfico</a></li>
          </ul>
        </li> <?php } ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-envelope-o"></i> Suporte<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Enviar e-mail</a></li>
          </ul>
        </li>
      
        
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <i class="fa fa-clock-o"></i> 
        <!-- Horarário de brasília -->
        <?php $dataHora = date("d/m/Y h:i:s"); echo $dataHora;?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-share-square-o"></i> <?php echo $_SESSION["nome"];  ?></a></li>
            <li><a href="#"><i class="fa fa-pencil-square-o"></i> Alterar</a></li>
            <li class="divider"></li>
            <li><a href="sair"><i class="fa fa-power-off"></i> Sair do Sistema</a></li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section>