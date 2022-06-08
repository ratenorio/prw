<?php
    include ('conexao.php');
    $sql= 'SELECT * FROM fluxo_caixa';
    //retorna todos os dados da consulta
    $result= mysqli_query($con, $sql);
    //retorna a primeira linha
    //$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem</title>
</head>
<body>
    <h1>Consulta de fluxo de caixa</h1>
    <table align= "center" border="1">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>

        </tr>
        <?php
            while($row= mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" .$row['id'] ."</td>";
                echo "<td>".$row['data'] ."</td>";
                echo "<td>" .$row['tipo'] ."</td>";
                echo "<td>" .$row['valor'] ."</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico'] ."</a>.</td>";
                echo "<td>" .$row['cheque'] ."</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";

            }
        ?>
        
    </table>
</body>
</html>