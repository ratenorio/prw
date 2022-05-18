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
        <form action="altera_agenda_exe.php" method="post">
            Nome: <input type="text" name="nome" value ="<?php echo $row['nome']?>" size="50"><br>
            Apelido: <input type="text" name="apelido" value ="<?php echo $row['apelido']?>" size="50"><br>
            Endereco: <input type="text" name="endereco" value ="<?php echo $row['endereco']?>" size="50"><br>
            Bairro: <input type="text" name="bairro" value ="<?php echo $row['bairro']?>" size="50"><br>
            Cidade: <input type="text" name="cidade" value ="<?php echo $row['cidade']?>" size="50"><br>
            Estado: 
            <select name="estado" <?php echo $row['estado']?> ><br>> 
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
            Telefone: <input type="text" name="telefone" value ="<?php echo $row['telefone']?>" size="15"><br>
            Celular: <input type="text" name="celular" value ="<?php echo $row['celular']?>" size="15"><br>
            Email: <input type="text" name="email" value ="<?php echo $row['email']?>" size="50"><br>
            
            <input type="submit" value="enviar">
            <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        </form>
    </body>

</html>