<?php
    $nome = $_GET["txtNome"];
    $email= $_GET["txtEmail"];
    $sexo= $_GET["optSexo"];
    $estado= $_GET["selEstado"];
    $opiniao= $_GET["txtOp"];
    $novidade= $_GET["chkNov"];
    $recomendar= $_GET["chkRec"];

    
    echo "Dados: " ."<br>"; 
    echo "Nome: " .$nome ."<br>";
    echo "Email: " .$email ."<br>";
    echo "Sexo: " .$sexo . "<br>";
    echo "Estado: " .$estado ."<br>";
    echo "Sua opinião: " .$opiniao ."<br>";
    
    if(empty($novidade)==true){
        echo "Não quer receber" ."<br>";
      }else{
          echo "Quer receber" ."<br>";
      }
  
      if(empty($recomendar)==true){
          echo "Não vai recomendar" ."<br>";
      }else{
          echo "Vai recomendar" ."<br>";
      }


?>