<?php
       //Conectar no BD
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'koenigseggclub';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    echo "<h1>INTRANET MARIO CLUB</h1>";
    echo "<p>Relação de e-mail</p>";
    echo "<p>Cod - Email</p>";

    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query($mysqli, $sql);

    while($linha = mysqli_fetch_array($resultado))
    {
        echo "<p>";
        echo $linha['codigo'];
        echo " - ";
        echo $linha['email'];
        echo " - <a href='excluir.php?ID=". $linha['codigo'] ."'>Excluir</a>";
        echo " - <a href='editar.php?ID=". $linha['codigo'] ."'>Editar</a>";
        echo "</p>";
    }

    echo"<hr>";
    echo"<a href='index.html'>Novo Registro</a>";
?>