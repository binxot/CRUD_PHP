<?php
$servername = "localhost";
$database = "instituto";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br/>";

//Insertar datos profesores
if(isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["departamento"])){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $departamento = $_POST["departamento"];
    $query = "INSERT INTO profesores (nombre, edad, departamento) VALUES ('$nombre', '$edad', '$departamento')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar datos";
    }
}

echo "<br/><a href='index.php'>Volver</a>";
?>