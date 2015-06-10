<?php include'header.php'; ?>
<?php
function __autoload($class_name){

    require_once'Controller/' . $class_name . '.php';
}
?>
<?php
// Instanciando o objeto Cliente & Promocao
$clientes = new Cliente();
$promocaos = new Promocao();
$cupons = new Cupons();
?>
<?php
// Aqui e realizado uma comparação, onde se existir um $_POST  ele executa as funções abaixo//
if (isset($_POST['GerarCupon'])):
    // Aqui ele um vetor $gerador e instancia objeto cupon //
    $gerador = new Cupons();
// Aqui ele recupera as variavéis //
    $cliente_id = trim($_POST["cliente_id"]);
    $promocao_id = trim($_POST["promocao_id"]);
    $notafiscal = trim($_POST["notafiscal"]);
    $dt_compra = trim($_POST["dt_compra"]);
    $valor_compra = trim($_POST["valor_compra"]);
    $data_cupons = trim($_POST["data_cupons"]);
    $hora_cupons = trim($_POST["hora_cupons"]);
    $obs_cupon = trim($_POST["obs_cupon"]);
    $aceitar_email = trim($_POST["aceitar_email"]);
//Aqui é setado as variavés que estão locado na memória// 
    $gerador->setCliente_id($cliente_id);
    $gerador->setPromocao_id($promocao_id);
    $gerador->setNotafiscal($notafiscal);
    $gerador->setDt_compra($dt_compra);
    $gerador->setValor_compra($valor_compra);
    $gerador->setData_cupons($data_cupons);
    $gerador->setHora_cupons($hora_cupons);
    $gerador->setObs_cupon($obs_cupon);
    $gerador->setAceitar_email($aceitar_email);
//Aqui ele realiza outra comparação, se existir $gerador e método insert ele executa as 
//funções abaixo. Se gravar no banco de dados ele imprime sucesso na tela, se não e imprime a mensagem de erro e não grava no banco.//
    if ($gerador->insert()) {
        //Redirecionamento de link pelo java script//
        echo'<script language= "JavaScript">
location.href="imprimir-cupom"</script>';
    } else {
        echo"Erro, o seu cupon não pode ser gerado";
    }
endif;
?>
<?php require_once 'ferramentas.php'; ?>
<!--formulário do gerador de cupom-->
<aside class="asside-right">
    <div class="panel panel-info">
        <div class="panel-heading">Preencha os dados para gerar um cupom</div>
        <div class="panel-body">
            <form action="" method="post">
                <div class="row">
					
                    <div class="col-xs-4">
                        <!--                        Aqui o foreach da um loop da tabela clientes para seleciona-lo-->
					 <select name="cliente_id" class="form-control" required="">
                            <option value=""></option>
                            <?php foreach ($clientes->findAll() as $key => $value): ?>
                                <option value="<?php echo $value->id; ?> "><?php echo $value->nome_cliente; ?> <?php echo $value->sobrenome_cliente; ?> - 0<?php echo $value->id; ?> </option>
                            <?php endforeach; ?>
                        </select>
                     
					</div>
                                                                         
                    <div class="col-xs-4">
                        <!--  Aqui o foreach da um loop da tabela promoções para seleciona-lo-->
                        <select name="promocao_id" required="" readonly class="form-control">
                            <option value="">Selecione uma promoção</option>
                            <?php foreach ($promocaos->findAll() as $key => $values): ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $values->promocao; ?> </option>

                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-xs-4">
                        <input type="text" name="notafiscal" required="" class="form-control" id="fiscal" placeholder="Nota fiscal (nº)">
                    </div> <br /><br /><br />

                    <div class="col-xs-3">
                        <input type="text" name="dt_compra" required="" id="dtcompra" class="form-control" placeholder="Data de compra" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="01-01-2010" max="31-12-2015" />
                    </div>

                    <div class="col-xs-3">
                        <input type="text" name="valor_compra" id="vlcompra" required="" class="form-control" placeholder="Valor da compra">
                    </div>
<!--                    Aqui a variavel o sistema reconhece a data atual do servidor-->
                    <div class="col-xs-2">
                        <input type="text" name="data_cupons" class="form-control" readonly value="<?php
                        $data = date("d/m/Y");
                        echo $data;
                        ?>">
                    </div>
<!--                    Aqui a variavel o sistema reconhece a hora atual do servidor-->
                    <div class="col-xs-2">
                        <input type="text" name="hora_cupons" class="form-control" readonly  value="<?php
                        $Hora = date("h:i:s");
                        echo $Hora;
                        ?>">
                    </div> <br /><br />

                    <textarea class="form-control" name="obs_cupon" rows="4" placeholder="Digite uma observação ou anotação importante caso precise." ></textarea>


                    <label>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" value="sim" name="aceitar_email"> <span class="label label-default">Eu aceito receber informações e promoções do MazaBox.</span>
                    </label>

                    <label>
                        &nbsp; &nbsp; &nbsp;<input type="radio" value="nao" name="aceitar_email"> <span class="label label-danger">Eu não aceito receber informações e promoções do MazaBox.</span>
                    </label>
                </div>

        </div> <br />

        <button type="reset" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
        <button type="submit" name="GerarCupon" class="btn btn-success"> <i class="glyphicon glyphicon-barcode"></i> Gerar um cupom</button>       
        <a href="cadastrar-clientes" class="btn btn-primary"> <i class="fa fa-user-plus"></i> Add Cliente</a>

        </form>
    </div>
</div>
</aside>



<?php include'bottom.php'; ?>