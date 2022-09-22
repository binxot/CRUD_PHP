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
//echo "Connected successfully<br/>";

//Pintar formulario con los datos del profesor a modificar
if(isset($_GET["numPro"])){
    $numPro = $_GET["numPro"];
    $query = "SELECT * FROM profesores WHERE numPro = '$numPro'";
    $result = mysqli_query($conn, $query);
    if($result){
        $row = mysqli_fetch_array($result);
        echo "<form action='modificar.php' method='post'>";
        echo "<input type='hidden' name='numPro' value='" . $row["numPro"] . "'/>";
        echo "Nombre: <input type='text' name='nombre' value='" . $row["nombre"] . "'/><br/>";
        echo "Edad: <input type='number' name='edad' value='" . $row["edad"] . "'/><br/>";
        echo "Departamento: <input type='number' name='departamento' value='" . $row["departamento"] . "'/><br/>";
        echo "<input type='submit' value='Modificar'/>";
        echo "</form>";
    }
}

//Actualizar profesores
if(isset($_POST["numPro"])){
    $numPro = $_POST["numPro"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $departamento = $_POST["departamento"];
    $query = "UPDATE profesores SET nombre = '$nombre', edad = '$edad', departamento = '$departamento' WHERE numPro = '$numPro'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Se ha modificado el registro correctamente";
    }else{
        echo "No se ha podido modificar el registro";
    }
}

echo "<br/><a href='index.php'>Volver</a>";
?>