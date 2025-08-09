<?php
       //Conectar no BD
       $servidor = 'localhost';
       $usuario = 'root';
       $senha = '';
       $banco = 'koenigseggclub';
   
       $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

       $codigo = $_GET['ID'];

       $sql = "SELECT * FROM cliente WHERE codigo=$codigo";
       $resultado = mysqli_query($mysqli, $sql);
       $linha = mysqli_fetch_array($resultado);

       echo "<h2>Editar Registro</h2>";
       echo "<form action='salvar.php' method='post'>";
       echo "<label>E-mail</label>";
       echo "<input type='email' name='email' value='".$linha['email']."'>";
       echo "<input type='hidden' name='codigo' value='".$linha['codigo']."'>";
       echo "<input type='submit' value='Atualizar'>";
       echo "</form>";


?>