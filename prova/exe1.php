<?php
    $salario=500;
    $salAjust= ($salario)+($salario*0.5);
    $salMaior= ($salario)+($salario*0.3);

    if($salario<=300){
        echo "O salário teve ajuste de 50%: " ."R$" .$salAjust ."<br>";
    }elseif($salario>300){
        echo "O salário teve ajuste de 30%: " ."R$" .$salMaior ."<br>";
    }
    
?>