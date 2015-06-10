
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>System:Acesso</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/control.css">
    </head>
    <body>
        
        <header>
            
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       
      <a class="navbar-brand" href="#">
          <img alt="Eletronic" src="img/logo-index.png" width="400">
      </a>

    </div>
  </div>
</nav>
        </header>
        <aside><div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title"> <?php 
            echo isset($_GET["m"])?base64_decode($_GET["m"]):"";?></h3>
  </div>
  <div class="panel-body">
  <form action="logar" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" name="login"class="form-control" id="exampleInputEmail1" placeholder="Digite um nome de usuário...">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Digite sua senha...">
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
  
</form>
  </div>
</div></aside>
        <article>
        
            <section></section> 
        
        </article>
        <footer><p>@copyright 2015  Cupom System - Versão Beta 1.0 </p> </footer>
        
        
    </body>
</html>
