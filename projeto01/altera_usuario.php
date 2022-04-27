<?php
    include('conexao.php');
    $id_usuario= $_GET['id_usuario'];
    $sql= 'SELECT * FROM usuario where id_usuario = '.$id_usuario;
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);
?>

<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
        <h1>Alteração do Usuario</h1>
        <form action="cadastro_usuario.php" method="post">
            Nome: <input type="text" name="txtNome" value ="<?php echo $row['nome_usuario']?>" size="50"><br>
            E-mail: <input type="text" name="txtEmail" value ="<?php echo $row['email_usuario']?>" size="50"><br>
            Telefone: <input type="text" name="txtTel" value ="<?php echo $row['telefone_usuario']?>" size="30"><br>
            <input type="submit" value="enviar">
        </form>
    </body>

</html>