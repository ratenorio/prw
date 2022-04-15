<?php
    $estoque= $_POST["txtProd"];
    $produtos= array('notebook', 'mouse', 'monitor', 'teclado', 'fone');
    $estoque= strtolower($estoque);

    $indice = array_search($estoque, $produtos);
    $indice++;

    if($indice){
        echo "O produto foi encontrado! O código dele é: " .($indice);
    }else{
        echo "Produto não encontrado";
    }
?>