<?php
//Conectar no BD
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'koenigseggclub';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

$email = $_POST['email'];
$codigo = $_POST['codigo'];

$sql = "UPDATE cliente SET email='$email' WHERE codigo=$codigo";
mysqli_query($mysqli, $sql);
header('location: intranet.php');
?>