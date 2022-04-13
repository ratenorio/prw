<?php
    $nome = $_POST["txtNome"];
    $est = $_POST["optEstado"];
    $cpf = $_POST["txtCpf"];
    $rg = $_POST["txtRg"];
    $saldo = $_POST["txtCartao"];
    $compra = $_POST["txtCompra"];

    if($saldo<$compra){
        echo "Saldo insuficiente para a compra";
    }

?>
