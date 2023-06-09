<?php
// Datos de conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "formularioregistro";

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];

// Validar los campos del formulario
if (empty($nombre) || empty($apellido1) || empty($apellido2) || empty($email) || empty($login) || empty($pass)) {
    die("Todos los campos son requeridos. Por favor, completa el formulario correctamente.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("El email ingresado no es válido. Por favor, proporciona un email válido.");
}

if (strlen($pass) < 4 || strlen($pass) > 8) {
    die("La contraseña debe tener entre 4 y 8 caracteres.");
}

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Verificar si el correo electrónico ya está registrado
$emailExistsQuery = "SELECT * FROM formularioregistro WHERE email = '$email'";
$result = $conn->query($emailExistsQuery);
if ($result->num_rows > 0) {
    die("El correo electrónico ingresado ya está registrado. Por favor, utiliza otro.");
}

// Insertar los datos en la base de datos
$insertQuery = "INSERT INTO formularioregistro (nombre, `primer apellido`, `segundo apellido`, email, usuario, contraseña) 
                VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$login', '$pass')";

if ($conn->query($insertQuery) === TRUE) {
    echo "Registro completado con éxito.<br>";
    echo "<a href='consulta.php'>Consulta</a> los usuarios registrados.";
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

$conn->close();
?>
