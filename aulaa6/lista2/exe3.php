<?php
    $nPrimo=0;
    for($nPrimo=0; $nPrimo<=200;$nPrimo++){
        if($nPrimo%1==0 && $nPrimo%$nPrimo==0){
            echo "Primo:  " .$nPrimo ."<br>";
        }
        else{
            echo "Não primo: " ."<br>";
        }

    }

?>