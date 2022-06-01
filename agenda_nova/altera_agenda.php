<?php
    include('conexao.php');
    $id_agenda= $_GET['id_agenda'];
    $sql= 'SELECT * FROM agenda where id_agenda = '.$id_agenda;
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);
?>

<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
        <h1>Alteração da Agenda</h1>
        <?php echo "<img class= 'center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"])."'width='150' height='150'/>";?>
        <form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
            <table align="center ">
            <tr>
                <td>Nome: </td>
                <td> <input type="text" name="nome" value ="<?php echo $row['nome']?>" size="50"></td>
            </tr>
            <tr>
                <td> Apelido:</td>
                <td><input type="text" name="apelido" value ="<?php echo $row['apelido']?>" size="50"></td>
            </tr>
            <tr>
                <td>Endereco: </td>
                <td><input type="text" name="endereco" value ="<?php echo $row['endereco']?>" size="50"></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input type="text" name="bairro" value ="<?php echo $row['bairro']?>" size="50"></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input type="text" name="cidade" value ="<?php echo $row['cidade']?>" size="50"></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td><select name="estado" <?php echo $row['estado']?> ><br>> 
                        <option value="SP">SP</option>
                        <option value="RJ">RJ</option>
                        <option value="PR">PR</option>
                        <option value="MT">MT</option>
                        <option value="RS">RS</option>
                        <option value="MG">MG</option>
                        <option value="SC">SC</option>
                        <option value="CE">CE</option>
                        <option value="PA">PA</option>
                        <option value="PE">PE</option>
                        <option value="RO">RO</option>
                        <option value="SE">SE</option>
                        <option value="AL">AL</option>
                        <option value="AC">AC</option>
                        <option value="RS">RS</option>
                        <option value="TO">TO</option>
                        <option value="MS">MS</option>
                        <option value="PB">PB</option>
                        <option value="RR">RR</option>
                        <option value="AM">AM</option>
                        <option value="MA">MA</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="PI">PI</option>
                        <option value="BA">BA</option>
                        <option value="DF">DF</option>
            </select>
            </td>
            </tr>
            <tr>
                <td> Telefone:</td>
                <td> <input type="text" name="telefone" value ="<?php echo $row['telefone']?>" size="15"></td>
            </tr>
            <tr>
                <td> Celular:</td>
                <td> <input type="text" name="celular" value ="<?php echo $row['celular']?>" size="15"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value ="<?php echo $row['email']?>" size="50"></td>
            </tr>
            <tr>
                <td class="form-item"></td>
                 <td><input type="file" name="foto" id ="foto" accept="image/*"/></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="enviar"> </td>
            </tr>
            <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">

        </form>
        </table>
    </body>

</html>