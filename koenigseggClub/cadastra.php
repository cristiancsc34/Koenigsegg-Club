<?php
    //Conectar no BD
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'koenigseggclub';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if($mysqli->connect_error){
        echo "Não conectou.";
    }else{
        echo "Conectou.";
    }

    $email = $_POST['email'];

    $sql = "INSERT INTO cliente (email) VALUES ('$email')";

    if(mysqli_query($mysqli, $sql)){
        echo "Usuário inserido.";
    }else{
        echo "Não cadastrado.";
    }

    header('location: intranet.php');
?>