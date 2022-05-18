<?php
    include("conexao.php");
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

    $sql= "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)
           VALUES  ('" .$nome_usuario."', '".$apelido_usuario."','".$endereco."', '".$bairro."','".$cidade_usuario."', '".$estado_usuario."', '".$telefone_usuario."', '".$celular_usuario."', '".$email_usuario. "')";

    $result= mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>