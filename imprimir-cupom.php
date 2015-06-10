<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->

<!--Script serve para poder abrir a tela de impressão assim que carregar a página -->

<script type="text/javascript">  function chromePrint(){
print();
}
function chromePrintDelay(){
setTimeout("print()", 100);
}
var browserName=navigator.appName;
if (browserName=="Microsoft Internet Explorer")
{
window.print();
}
else
  {
  if (browserName=="Netscape") //google chrome app.Name
  {
  chromePrintDelay();
  }
  else {
   window.onload = window.print; // helps with Opera
   }
   
   
   }  
      </script>

 <style>
                @media print { 
                    #noprint { display:none; } 
                    body { background: #fff; }
                }
            </style>

<!--Final do script -->

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="alternate" type="text/css" midia="print" href="css/imprimir.css">
<?php
function __autoload($class_name) {
    require_once 'Controller/' . $class_name . '.php';
}
?>

<?php $gerador = new Cupons();?>
<?php $clientes = new Cliente();?>

<center>
<table class="table-cupon"> 
    <tr>
        <td><center><img src="img/marcar-maza.png" width="200"></center></td>                 
    </tr
    <?php foreach ($gerador->ImprimirCupom() as $key => $value): ?>
    <tr>
        <td class="txtcnpj"><p>
        CNPJ: 00.264.478/0001-29 
        Av. 22 de maio, 6224
        Nova Cidade - Itaboraí - RJ </p></td></tr>
    <tr>
        <td class="bordas"><p>
        <b>Nome: <?php echo $value->nome_cliente; ?> <?php echo $value->sobrenome_cliente; ?><br>
            E-mail: <?php echo $value->email_cliente; ?> <br>
            Rg:  <?php echo $value->rg_cliente; ?></b><br />
                
                <b>Tels:<?php echo $value->tel_cliente;?>\<?php echo $value->cel_cliente;?></p></b>
    </td>
    
    </tr>           
    <tr>
        <td class="bordas">
        Premio : Um vale viagem CVC.<br />
        Promoção válida até 11/06/2015.  <br />
        O Sorteio será realizado no dia 11/06/2015 às 17h. <br />
     
        </td>
    </tr>    
    <?php endforeach;   ?>
</table><br />
  
<div id="noprint">
 <a href="cadastrar-clientes" class="btn btn-primary"> <i class="fa fa-user-plus"></i> Add Cliente</a>   
</div>
</center> 
