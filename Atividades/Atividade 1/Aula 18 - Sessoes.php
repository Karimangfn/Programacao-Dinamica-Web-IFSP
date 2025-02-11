<?php
session_start();

$_SESSION['email'] = "email@gmail.com.br";
$_SESSION['nome'] = "Fernando";

//unset = Limpa essa informação da Memória
unset($_SESSION['email']);

echo $_SESSION['nome'];
echo $_SESSION['email']; //Email não aparecera pois foi removido pelo unset
?>