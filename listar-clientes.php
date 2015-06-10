
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

$clientes = new Cliente;


?>
<div class="panel panel-default">
  <div class="panel-body">
   <table class="table table-hover">
    <tr>
        <th>CODIGO</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>TEL</th>
        <th>CEL</th>
    </tr>
    
    <?php foreach ($clientes->findAll() as $key=>$value): ?>
    <tr>
        <th><?php echo $value->id; ?></th>
        <th><?php echo $value->nome_cliente; ?> <?php echo $value->sobrenome_cliente; ?></th>
        <th><?php echo $value->email_cliente; ?></th>
        <th><?php echo $value->tel_cliente; ?></th>
        <th><?php echo $value->cel_cliente; ?></th>
    </tr>
    <?php endforeach; ?>
</table>
  </div>
</div>



<?php require_once'bottom.php'; ?>