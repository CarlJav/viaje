<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['pass'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $deporte = $_POST['deporte'];
    $marca_preferida = $_POST['marca_preferida']; 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "empresaviajes1";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO viaje (nombre, apellido, correo, usuario, contraseña, telefono, sexo, deporte, marca_preferida)
            VALUES ('$nombre', '$apellido', '$email', '$usuario', '$contrasena', '$telefono', '$sexo', '$deporte', '$marca_preferida')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro creado correctamente";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $conn->close();
}
?>
