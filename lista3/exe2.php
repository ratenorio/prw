<?php
    $palavra= "Green day banda atemporal ";
    $caract= strlen($palavra);

    echo "A frase: " .$palavra .", contém " .strlen($palavra) ." caracteres" ."<br>";

    for($cont=0; $cont<$caract; $cont++){
        switch($palavra[$cont]){
            case "a": $palavra[$cont]= "x"; break;
            case "e": $palavra[$cont]= "x"; break;
            case "i": $palavra[$cont]= "x"; break;
            case "o": $palavra[$cont]= "x"; break;
            case "u": $palavra[$cont]= "x"; break;
        }

    }
   
   echo "A frase: " .$palavra .", contém " .strlen($palavra) ." caracteres";


?>