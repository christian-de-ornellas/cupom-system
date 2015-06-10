<?php

$con = mysql_connect("localhost", "root", "")
        or die("Erro ao conectar com o banco");
mysql_select_db("mazabox", $con)
        or die("Erro na base de dados");

?>
