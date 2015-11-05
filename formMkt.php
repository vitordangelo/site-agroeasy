<?php
include ("bd/banco.php");

if($_POST)
{

    $emailmkt = filter_var($_POST["emailmkt"], FILTER_SANITIZE_EMAIL);
    insereEmail($conexao, $emailmkt);
    header("location:index.php?info=ok");
    
}
