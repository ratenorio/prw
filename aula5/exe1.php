<?php
    $n1= 1;
    $n2= 5;
    $n3= 3;

    if($n1>$n2 && $n1>$n3){
        if($n2>$n3){
            echo $n1. " , ".$n2. " , ".$n3;
        }
        else{
            if($n2<$n3){
                echo $n1. " , " .$n3. " , " .$n2;
            }
        }
    }
    else{
        if($n2>$n1 && $n2>$n3){
            if($n1>$n3){
                echo $n2. " , ".$n1. " , " .$n3;
            }
            else{
                if($n1<$n3){
                    echo $n2. " , " .$n3. " , " .$n1;
                }
            }
        }
        else{
            if($n3>$n1 && $n3>$n2){
                if($n1>$n2){
                    echo $n3. " , " .$n1. " , " .$n2;
                }
                else{
                    if($n1<$n2){
                        echo $n3. " , " .$n2. " , " .$n1;
                    }
                }
            }
        }
    }


?>