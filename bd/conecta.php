<?php
$conexao = mysqli_connect("179.188.16.83", "agroeasy", "vitor123", "agroeasy");

if (!$conexao) {
	echo "Não conectou no banco!";
}
else echo "Conectou no banco SIM!";