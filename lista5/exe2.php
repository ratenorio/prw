<?php
    $estoque= $_POST["txtProd"];
    $produtos= array('notebook', 'mouse', 'monitor', 'teclado', 'fone');
    $preco= array('2500.00', '30.00', '1500.00', '600.00', '100.00');
    $estoque= strtolower($estoque);

    $indice = array_search($estoque, $produtos);
    $indice++;

    if($indice){
        echo "O produto foi encontrado! O código dele é: " .($indice) ."<br>" ."O preço é: " .($preco[$indice-1]);
    }else{
        echo "Produto não encontrado";
    }
?>