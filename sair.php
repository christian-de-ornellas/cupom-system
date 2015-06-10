<?php

session_start();
session_destroy();
echo "<script>";
echo "location.href='index?m=".
        base64_encode("Deslogado com sucesso!")."'";
echo "</script>";
exit;
?>
