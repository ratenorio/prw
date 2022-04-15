<?php
    $n=0;
    $soma=0;
    for($n=0;$n<100;$n++){
        if($n%2==0){
            $soma= $soma+$n;
        }
    }
    echo "A soma dos pares menores que 100 é: " .$soma;
?>