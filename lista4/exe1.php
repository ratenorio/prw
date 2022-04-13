<?php
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];
    $op= $_POST["opOperacao"];

    if($o=="soma"){
        echo "Resultado: " .($num1+$num2);
    }elseif($o=="sub"){
        echo "Resultado: " .($num1-$num2);
    }elseif($op=="div"){
        echo "Resultado: " .($num1/$num2);
    }elseif($op=="mult"){
        echo "Resultado: " .($num1*$num2);
    }


?>