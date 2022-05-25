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
        <?php echo "<img class= 'center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"])."'width='150' height='150'/>";?>
        <form action="altera_usuario_exe.php" method="post" align="center" enctype="multipart/form-data">
        <table align= "center" >
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value ="<?php echo $row['nome_usuario']?>" size="50"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email" value ="<?php echo $row['email_usuario']?>" size="50"></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" value ="<?php echo $row['telefone_usuario']?>" size="30"></td>
                </tr>
                <tr>
                    <td class="form-item"></td>
                    <td><input type="file" name="foto" id ="foto" accept="image/*"/></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" value="enviar"> </td>
                </tr>
                <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
            </table>
        </form>
    </body>

</html>