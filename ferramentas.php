
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->

<aside >
	<div class="list-group">
  <a href="#" class="list-group-item active">
      <p><i class="glyphicon glyphicon-wrench"></i> Ferramentas</p>
  </a>
  <a href="gerar-cupom" class="list-group-item"><i class="glyphicon glyphicon-barcode"></i> Gerar um cupom</a>
  <?php if($_SESSION["perfil"] == "ADMIN"){ ?>
  <a href="#" class="list-group-item"><i class=" glyphicon glyphicon-compressed"></i> 2ª via de cupom</a>
    <?php } ?>
  <a href="cadastrar-clientes" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Cadastrar cliente</a>
  <?php if($_SESSION["perfil"] == "ADMIN"){ ?>
  <a href="gerar-cupon" class="list-group-item"> <i class="glyphicon glyphicon-circle-arrow-up "></i> Downloads</a>
   <?php } ?>
</div>
</aside>

 
       
      