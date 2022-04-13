<?php
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];
    $op= $_POST["opOperacao"];

    if($o=="soma"){
        echo ($num1+$num2);
    }elseif($o=="sub"){
        echo ($num1-$num2);
    }elseif($op=="div"){
        echo ($num1/$num2);
    }elseif($op=="mult"){
        echo ($num1*$num2);
    }


?>