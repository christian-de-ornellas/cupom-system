
<!--HTML5 & PHP-->
<!--/**
 * ELETRONIC INOVANDO SEMPRE
 *
 * @Christian de Ornellas Possidonio | Analista & desenvolvedor 
 */-->
<?php require_once'header.php'; ?>

<?php  function __autoload($class_name){
require_once 'Controller/' .$class_name. '.php';    
}

$cupons = new Cupons;


?>
<div class="panel panel-default">
  <div class="panel-body">
   <table class="table table-hover">
    <tr>
        <th>CODIGO</th>
        <th>NOME</th>
        <th>NOTA-FISCAL</th>
        <th>DATA DA COMPRA</th>
        <th>VALOR DA COMPRA</th>
    </tr>
    
    <?php foreach ($cupons->relnf() as $key=>$value): ?>
    <tr>
        <th><?php echo $value->id; ?></th>
        <th><?php echo $value->nome_cliente; ?> <?php echo $value->sobrenome_cliente; ?></th>
        <th><?php echo $value->notafiscal; ?></th>
        <th><?php echo $value->dt_compra; ?></th>
        <th><?php echo $value->valor_compra; ?></th>
    </tr>
    <?php endforeach; ?>
</table>
  </div>
</div>



<?php require_once'bottom.php'; ?>