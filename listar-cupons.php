
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->
<?php require_once('header.php'); ?>

<?php

function __autoload($class_name) {

    require_once ('Controller/') . $class_name . '.php';
}

$cupons = new Cupons();
?>

    <div class="panel panel-default">
        <div class="panel-heading">Gerador de cupon</div>
        <div class="panel-body">

            <table class="table table-hover">


                <tr>
                    <th>NUMERO DO CUPOM</th>
                    <th>PROMOÇÃO</th>
                    <th>NOME COMPLETO</th>
                    <th>CPF</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE FIXO</th>
                    <th>CELULAR</th>
                  <!--  <th>AÇÃO</th>-->


                </tr>
<?php foreach ($cupons->relcupom() as $key => $value): ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->promocao; ?></td>
                        <td><?php echo $value->nome_cliente; ?> </td>
                        <td><?php echo $value->cpf_cliente; ?></td>
                        <td><?php echo $value->email_cliente; ?></td>
                        <td><?php echo $value->tel_cliente; ?></td>
                        <td><?php echo $value->cel_cliente; ?></td>
                   <!-- <td><a>Editar</a></td>
                        <td><a>Excluir</a></td>-->
                        
                        </div>

                        </div> 
                    </tr>
<?php endforeach; ?>
            </table>
        </div>
    </div>
<?php require_once 'bottom.php'; ?>