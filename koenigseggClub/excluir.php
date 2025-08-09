<?php
   //Conectar no BD
   $servidor = 'localhost';
   $usuario = 'root';
   $senha = '';
   $banco = 'koenigseggclub';

   $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

   $codigo = $_GET['ID'];

   $sql = "DELETE FROM cliente WHERE codigo='$codigo'";
   mysqli_query($mysqli, $sql);

   header('location: intranet.php');
?>