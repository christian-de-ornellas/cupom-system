<?php
//Espaço de memoria do navegador
//Gravar em sessao, fica gravado ate o navegador ser fechado
session_start();
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

//Criptografand
//$senha = md5($senha);

include_once 'fontes/conexao.php';

$sql = "SELECT * FROM usuarios WHERE login = '".$login."' 
    AND senha = '".$senha."'";
$rs = mysql_query($sql, $con);
if(mysql_num_rows($rs) == 1){
    
    $row = mysql_fetch_array($rs);
    $_SESSION["login"] = $row["login"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["id"] = $row["id"];
    $_SESSION["logado"] = time();
    
    header("location: painel");
    
}else{

    mysql_close($con);
    $msg = base64_encode("Usuario / senha invalidos!");
    header('location: index?m='.$msg);
    exit;
    
}


