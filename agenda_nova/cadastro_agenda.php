<?php
    include("conexao.php");

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
    $nome_usuario= $_POST["nome"];
    $apelido_usuario= $_POST["apelido"];
    $endereco= $_POST["endereco"];
    $bairro= $_POST["bairro"];
    $cidade_usuario= $_POST["cidade"];
    $estado_usuario= $_POST["estado"];
    $telefone_usuario= $_POST["telefone"];
    $celular_usuario= $_POST["celular"];
    $email_usuario= $_POST["email"];
  
    echo "<P>Nome: " .$nome_usuario. "<br>";
    echo "Apelido: " .$apelido_usuario ."<br>";
    echo "Endereco: " .$endereco. "<br>";
    echo "Bairro: " .$bairro ."<br>";
    echo "Cidade: " .$cidade_usuario ."<br>";
    echo "Estado: " .$estado_usuario. "<br>";
    echo "Telefone: " .$telefone_usuario ."<br>";
    echo "Celular: " .$celular_usuario. "<br>";
    echo "Email: " .$email_usuario ."</P>";

    $sql= "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, foto_blob, foto_nome)
           VALUES  ('" .$nome_usuario."', '".$apelido_usuario."','".$endereco."', '".$bairro."','".$cidade_usuario."', '".$estado_usuario."', '".$telefone_usuario."', '".$celular_usuario."', '".$email_usuario. "','".$fotoBlob."','".$fotoNome."')";

    $result= mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>