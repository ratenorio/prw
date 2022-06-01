<?php

include('conexao.php');

$fotoNome= $_FILES['foto']['name'];
$target_dir= "upload/";
$target_file= $target_dir . basename($_FILES["foto"]["name"]);

$imageFileType= strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$extension_arr= array("jpg", "jpeg", "png", "gif");

if(in_array($imageFileType, $extension_arr)){
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome)){
        $fotoBlob= addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

$id_agenda= $_POST['id_agenda'];
$nome= $_POST['nome'];
$apelido= $_POST['apelido'];
$endereco= $_POST['endereco'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];
$telefone= $_POST['telefone'];
$celular= $_POST['celular'];
$email= $_POST['email'];

echo "<h1> Alteração de dados  </h1>";
echo "<p> Nome Usuário: " .$nome . "<p>";

if(strlen($fotoNome)>0){

    $sql= "UPDATE agenda SET
        nome='".$nome."',
        apelido='".$apelido."',
        endereco='".$endereco."',
        bairro='".$bairro."',
        cidade='".$cidade."',
        estado='".$estado."',
        telefone='".$telefone."',
        celular='".$celular."',
        email='".$email."',
        foto_blob='".$fotoBlob."',
        foto_nome='".$fotoNome."'
        WHERE id_agenda=".$id_agenda;
}
else{
    $sql= "UPDATE agenda SET
        nome='".$nome."',
        apelido='".$apelido."',
        endereco='".$endereco."',
        bairro='".$bairro."',
        cidade='".$cidade."',
        estado='".$estado."',
        telefone='".$telefone."',
        celular='".$celular."',
        email='".$email."'
        WHERE id_agenda=".$id_agenda;
}


$result= mysqli_query($con, $sql);
if($result)
    echo "Dados alterados com sucesso <br>";
else
    echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>"

?>
<a href= 'index.php'>Voltar</a>