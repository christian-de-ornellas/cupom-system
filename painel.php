
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->

<?php require_once './header.php'; ?>
<center>
<div class="panel panel-default">
  <div class="panel-body">
      <h3>Olá,<b> <?php echo $_SESSION["nome"]; ?> </b> </h3>
    <h5>Seja bem vindo ao,<b> Cupom System</b></h5>
    Ultilize a barra de menu para ter acesso às ultilidades do sistema.<br />
   Hoje: <b><?php $data = date("d/m/Y"); echo $data;?></b> Hora: <b><?php $Hora = date("h:i:s"); echo $Hora;?></b> <br /><br />
   
   <a  href="gerar-cupom" class="btn btn-success"> <i class="glyphicon glyphicon-barcode"></i> Quero Gerar um cumpom</a> 
  </div>
</div>
    </center>
<?php require_once 'bottom.php'; ?>
