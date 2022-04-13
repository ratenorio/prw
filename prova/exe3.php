<?php
    $peso = $_POST["txtPeso"];
    $alt = $_POST["txtAlt"];
    $imc= $peso/($alt*$alt);

    if($imc<17){
        echo "Muito abaixo do peso";
    }elseif($imc>=17 && $imc<18.49){
        echo "Abaixo do peso";
    }elseif($imc>=18.5 && $imc<24.99){
        echo "Peso normal";
    }elseif($imc>=25 && $imc<29.99){
        echo "Acima do peso";
    }elseif($imc>=30 && $imc<34.99){
        echo "Obesidade I";
    }elseif($imc>=35 && $imc<39.99){
        echo "Obesidade II: severa";
    }elseif($imc>=40){
        echo "Obesidade III: mórbida";
    }


?>