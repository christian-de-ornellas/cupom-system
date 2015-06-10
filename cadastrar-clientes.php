
<?php include'header.php' ?>
<?php

function __autoload($class_name) {
    require_once 'Controller/' . $class_name . '.php';
}
?>
<?php require_once 'ferramentas.php'; ?>



<aside class="asside-right">
    <div class="panel panel-success">
        <div class="panel-heading">Preencha o formulário com os dados do cliente</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-4">
                    <?php
                    $cliente = new Cliente();
                    if (isset($_POST['incluir'])):

                        $nome_cliente = trim($_POST["nome_cliente"]);
                        $sobrenome_cliente = trim($_POST["sobrenome_cliente"]);
                        $email_cliente = trim($_POST["email_cliente"]);
                        $nasc_cliente = trim($_POST["nasc_cliente"]);
                        $cpf_cliente = trim($_POST["cpf_cliente"]);
                        $rg_cliente = trim($_POST["rg_cliente"]);
                        $nomepai_cliente = trim($_POST["nomepai_cliente"]);
                        $nomemae_cliente = trim($_POST["nomemae_cliente"]);
                        $tel_cliente = trim($_POST["tel_cliente"]);
                        $cel_cliente = trim($_POST["cel_cliente"]);
                        $cep_cliente = trim($_POST["cep_cliente"]);
                        $rua_cliente = trim($_POST["rua_cliente"]);
                        $num_cliente = trim($_POST["num_cliente"]);
                        $cidade_cliente = trim($_POST["cidade_cliente"]);
                        $bairro_cliente = trim($_POST["bairro_cliente"]);
                        $estado_cliente = trim($_POST["estado_cliente"]);
                        $complemento_cliente = trim($_POST["complemento_cliente"]);
                        $facebook_cliente = trim($_POST["facebook_cliente"]);

                        $cliente->setNome_cliente($nome_cliente);
                        $cliente->setSobrenome_cliente($sobrenome_cliente);
                        $cliente->setEmail_cliente($email_cliente);
                        $cliente->setNasc_cliente($nasc_cliente);
                        $cliente->setCpf_cliente($cpf_cliente);
                        $cliente->setRg_cliente($rg_cliente);
                        $cliente->setNomepai_cliente($nomepai_cliente);
                        $cliente->setNomemae_cliente($nomemae_cliente);
                        $cliente->setTel_cliente($tel_cliente);
                        $cliente->setCel_cliente($cel_cliente);
                        $cliente->setCep_cliente($cep_cliente);
                        $cliente->setRua_cliente($rua_cliente);
                        $cliente->setNum_cliente($num_cliente);
                        $cliente->setCidade_cliente($cidade_cliente);
                        $cliente->setBairro_cliente($bairro_cliente);
                        $cliente->setEstado_cliente($estado_cliente);
                        $cliente->setComplemento_cliente($complemento_cliente);
                        $cliente->setFacebook_cliente($facebook_cliente);


                        if ($cliente->insert()) {
                            echo '<script type="text/javascript">alert(" Cliente cadastrado com sucesso")</script>';
                        }  else {
                              echo"<script type='text/javascript'>O Cliente não pode ser cadastrado tente novamento ou entre em contato com o suporte</script>";    
                        }

                    endif;
                    ?>
                    
         
                    <form  name="frmcpf" method="post"  onsubmit="VerificaCPF();">  
                        <input type="text" name="nome_cliente" class="form-control" required placeholder="Nome">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="sobrenome_cliente" class="form-control"  placeholder="Sobrenome">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="email_cliente" class="form-control" placeholder="E-mail">
                        </div>
                </div> <br />

                <div class="row">
                    <div class="col-xs-2">
                        <input type="text" name="nasc_cliente" id="nasc" class="form-control" placeholder="Nascimento">
                    </div>
                    <div class="col-xs-3">
                        
                        <input type="text" name="cpf_cliente" class="form-control" required maxlength="11" placeholder="Cpf" id="cpf">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="rg_cliente" id="rg" class="form-control" placeholder="Rg">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="nomepai_cliente" class="form-control" placeholder="Nome do pai">
                    </div>
                </div> 
                <br />

                <div class="row">
                    <div class="col-xs-3">
                        <input type="text" name="nomemae_cliente" class="form-control" placeholder="Nome da mae">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="tel_cliente" id="tel" class="form-control" placeholder="Telefone fixo">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="cel_cliente" id="cel" class="form-control" required placeholder="Celular">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="cep_cliente" id="cep" class="form-control"  placeholder="Cep" >
                    </div>
                </div> <br />

                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="rua_cliente" class="form-control" id="rua" placeholder="Rua"  >
                    </div>
                    <div class="col-xs-1">
                        <input type="text" name="num_cliente" class="form-control" id="num" placeholder="Nº">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="cidade_cliente" class="form-control" id="cidade" placeholder="Cidade"  >
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="bairro_cliente" class="form-control" id="bairro" placeholder="Bairro"  >
                    </div>
                </div> <br />

                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="estado_cliente" class="form-control" id="uf" placeholder="Estado"  >
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="complemento_cliente" class="form-control" placeholder="Complemento">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="facebook_cliente" class="form-control" placeholder="Facebook">
                    </div>
                </div> <br />
                <button type="reset" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
                <button type="submit"  name="incluir" class="btn btn-success"> <i class="fa fa-user-plus"></i> Incluir</button>
                <button type="submit"  class="btn btn-success" name="Submit" onclick="VerificaCPF();">Verificar CPF</button>
               
                </form>
                   
            </div>
        </div>
        
</aside>

<?php require_once 'bottom.php'; ?>