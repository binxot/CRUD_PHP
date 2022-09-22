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

//Delete
if(isset($_GET["numPro"])){
    $numPro = $_GET["numPro"];
    $query = "DELETE FROM profesores WHERE numPro = '$numPro'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Datos borrados correctamente";
    }else{
        echo "Error al borrar datos";
    }
}

echo "<br/><a href='index.php'>Volver</a>";
?>