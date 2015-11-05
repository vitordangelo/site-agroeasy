<?php
// include ("conecta.php");
$conexao = mysqli_connect("179.188.16.83", "agroeasy", "vitor123", "agroeasy");

function insereEmail($conexao, $email) {
    $query = "insert into cadastro_site (email) values ('{$email}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}