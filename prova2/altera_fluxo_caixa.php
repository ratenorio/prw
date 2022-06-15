<?php
    include('conexao.php');
    $id= $_GET['id'];
    $sql= 'SELECT * FROM fluxo_caixa where id = '.$id;
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);
?>

<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
        <h1>Alteração </h1>
        <form action="altera_fluxo_caixa_exe.php" method="post" enctype="multipart/form-data">
            <table align="center ">
            <tr>
                <td>Data: </td>
                <td> <input type="date" name="data" value="<?php echo $row['data']?>"></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                    <td>Entrada<input type="radio" name="tipo" value= "entrada"  <?php if($row['tipo']=="entrada") echo "checked " ?>></td>
                    <td>Saida<input type="radio" name="tipo" value="saida" <?php if($row['tipo']=="saida") echo "checked " ?>></td>

            </tr>
            <tr>
                <td>Valor: </td>
                <td><input type="text" name="valor" value ="<?php echo $row['valor']?>" size="20"></td>
            </tr>
            <tr>
                <td>Historico:</td>
                <td><input type="text" name="historico" value ="<?php echo $row['historico']?>" size="50"></td>
            </tr>
            <tr>
                <td>Cheque:</td>
                <td><select name="cheque"><br>> 
                        <option value="sim" <?php if($row['cheque']=="sim") echo "selected " ?>>Sim</option>
                        <option value="nao" <?php if($row['cheque']=="nao") echo "selected " ?>>Nao</option>
                        
                    </select>
            </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="enviar"> </td>
            </tr>
            <input name="id" type="hidden" value="<?php echo $row['id']?>">

        </form>
        </table>
    </body>

</html>