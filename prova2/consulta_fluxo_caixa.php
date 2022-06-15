<?php
    include ('conexao.php');
  
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
    echo " " .$tipo;
    if($tipo=='entrada'){
        $sql="select sum(valor) valor from fluxo_caixa where tipo= 'entrada'";
       
        
    }else if($tipo=='saida'){
        $sql="select sum(valor) valor from fluxo_caixa where tipo= 'saida'";       
   
    }else if($tipo=='saldo'){
        $sql= "select sum(case when tipo='entrada' then valor else 0 end) -
            sum(case when tipo= 'saida' then valor else 0 end) as valor from fluxo_caixa";           
    }
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);
    echo " ".$row['valor'];

    ?>
</body>
</html>