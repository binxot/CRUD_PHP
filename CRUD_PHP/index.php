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

//Consultar datos
echo "<h2>Tabla profesores</h2>";
$query = "SELECT * FROM profesores";
$result = mysqli_query($conn, $query);
if($result){
    echo "<table border='1'>";
    echo "<tr><th>NumPro</th><th>Nombre</th><th>Edad</th><th>Departamento</th></tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>" . $row["numPro"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["departamento"] . "</td><td><a href='borrar.php?numPro=" . $row["numPro"] . "'>Borrar</a></td><td><a href='modificar.php?numPro=" . $row["numPro"] . "'>Modificar</a></td></tr>";
    }
    echo "</table>";
}else{
    echo "No se han encontrado datos en la tabla profesores";
}

echo "<a href='insertar.html'>Insertar</a>";

mysqli_close($conn);
?>