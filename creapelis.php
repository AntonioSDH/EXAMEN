<?php
$servidor= "localhost";
$usuario= "EXAMEN";
$password = "12345";
$nombreBD= "db_peliculas";

// Creamos la conexión con el servidor SQL
$conn = mysqli_connect($servidor, $usuario, $password, $nombreBD);
// Verificamos la conexión con el servidor MySQL
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

// Crea la tabla
$sql = "CREATE TABLE PELICULAS (
id INT(10),
id_director INT(10),
titulo VARCHAR(300),
genero VARCHAR(64),
precio INT(8)
)";

// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "la tabla peliculas ha sido creado";
} else {
    echo "Hubo un error al crear la tabla peliculas: " . $conn->error;
}
// Cerramos la conexión
$conn->close();
?>
