<?php
    include('conexao.php');
    //upload da foto
    
    $fotoNome= $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file= $target_dir . basename($_FILES["foto"]["name"]);
    //selecionar o tipo do arquivo

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //tipos validos
    $extensions_arr= array("jpg", "jpeg", "png", "gif");
    //checar as extenções do arquivo

    if( in_array($imageFileType, $extensions_arr)){
        //carregar o arquivo
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome)){
            $fotoBlob= addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

    $nome_usuario= $_POST["txtNome"];
    $email_usuario= $_POST["txtEmail"];
    $fone_usuario= $_POST["txtTel"];

    echo "<P>Nome: " .$nome_usuario. "<br>";
    echo "E-mail: " .$email_usuario ."<br>";
    echo "Telefone: " .$fone_usuario ."</P>";

    $sql= "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, foto_blob, foto_nome)
           VALUES  ('" .$nome_usuario."', '".$email_usuario."','".$fone_usuario. "','".$fotoBlob. "','".$fotoNome."')";

    $result= mysqli_query ($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>