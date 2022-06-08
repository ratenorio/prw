<?php
    include ('conexao.php');
    $sql= 'SELECT * FROM fluxo_caixa';
    //retorna todos os dados da consulta
    $result= mysqli_query($con, $sql);
    //retorna a primeira linha
    //$row= mysqli_fetch_array($result);
    $tipo= $_POST["tipo"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>resultado</title>
</head>
<body>
    <h1>Consulta: </h1>
    
    <?php 
    while($row= mysqli_fetch_array($result)){
    if($tipo=='entrada'){
        $sql="select sum(valor) valor from fluxo_caixa where tipo= 'entrada'";
        echo " ".$row['tipo'];
        
    }else if($tipo=='saida'){
        $sql="select sum(valor) valor from fluxo_caixa where tipo= 'saida'";
        echo " ".$row['tipo'];
   
    }else if($tipo=='saldo'){
        $sql= "select sum(case when tipo='entrada' then valor else 0 end) -
            sum(case when tipo= 'saida' then valor else 0 end) as valor from fluxo caixa";
            echo " ".$row['tipo'];
    }
}
    ?>
</body>
</html>