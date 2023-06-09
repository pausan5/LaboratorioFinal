<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "formularioregistro";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$selectQuery = "SELECT * FROM formularioregistro";
$result = $conn->query($selectQuery);

if ($result->num_rows > 0) {
    echo "<h2>Usuarios Registrados</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";

    echo "<th>Primer<br>Apellido</th>";

    echo "<th>Segundo<br>Apellido</th>";

    echo "<th>Email</th>";

    echo "<th>Login</th>";
    
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['NOMBRE']."</td>";
        echo "<td>".$row['PRIMER APELLIDO']."</td>";
        echo "<td>".$row['SEGUNDO APELLIDO']."</td>";
        echo "<td>".$row['EMAIL']."</td>";
        echo "<td>".$row['USUARIO']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>


