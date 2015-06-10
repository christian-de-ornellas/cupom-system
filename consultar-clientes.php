
<!--HTML5 & PHP-->
<!--/**
 * ELETRONIC INOVANDO SEMPRE
 *
 * @Christian de Ornellas Possidonio | Analista & desenvolvedor 
 */-->
<?php require_once'header.php'; ?>


<div class="panel panel-default">
  <div class="panel-body">
    <h3>Consultar Clientes</h3>

    <form action="consultar-clientes" method="post">
    Nome: <input type="text" name="nome_cliente" />
    <input type="submit" value="Consultar Cliente" />
</form>
<?php
    if(isset($_POST["nome_cliente"])){
        $nome_cliente = $_POST["nome_cliente"] . "%";
        include_once 'fontes/conexao.php';
        $sql = "SELECT * FROM clientes WHERE nome_cliente LIKE '".$nome_cliente."'";
        $rs = mysql_query($sql);
        if(mysql_num_rows($rs) > 0){
?>
    <table>
        <tr>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>EMAIL</th>
            <th>NASCIMENTO</th>
            <th>CPF</th>
            <th>RG</th>
            <th>NOME DO PAI</th>
            <th>NOME DA MAE</th>
            <th>TEL</th>
            <th>CEL</th>
            <th>CEP</th>
            <th>AÇÃO</th>
        </tr>
        <?php while($reg = mysql_fetch_array($rs)){ ?>
        <tr>
            <td><?php echo $reg["nome_cliente"]; ?></td>
            <td><?php echo $reg["sobrenome_cliente"]; ?></td>
            <td><?php echo $reg["email_cliente"]; ?></td>
            <td><?php echo $reg["nasc_cliente"]; ?></td>
            <td><?php echo $reg["cpf_cliente"]; ?></td>
            <td><?php echo $reg["rg_cliente"]; ?></td>
            <td><?php echo $reg["nomepai_cliente"]; ?></td>
            <td><?php echo $reg["nomemae_cliente"]; ?></td>
            <td><?php echo $reg["tel_cliente"]; ?></td>
            <td><?php echo $reg["cel_cliente"]; ?></td>
            <td><?php echo $reg["cep_cliente"]; ?></td>
            <td> <a href="editar1.php?id=<?php echo base64_encode($reg["id"]); ?>">
                    Editar</a> 
                | Excluir </td>
        </tr>
        <?php } ?>
    </table>
    <?php
            }else{ echo "Nenhum registro encontrado!"; }
        }
    ?>

  </div>
</div>
<?php require_once'bottom.php'; ?>