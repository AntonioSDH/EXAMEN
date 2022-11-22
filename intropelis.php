<?php
// Creamos la conexión con la base de datos
$conn = mysqli_connect($servidor, $usuario, $password, $nombreBD);
// Aquí se revisa la conexión con MySQL
if (!$conn) {
    die("la conexión ha fallado: " . mysqli_connect_error());
}

// La variable que creara la tabla en la base de datos.
$mi_tabla= "INSERT INTO peliculas VALUES (1,1,'Hell Boy','Accion','20'),(1,1,'Hell Boy 1','Accion','20'),(1,1,'Hell Boy','Accion','20')";
// Condicional PHP que creará la tabla
if (mysqli_query($conn, $mi_tabla)) {
// Mostramos mensaje si la tabla ha sido creado correctamente!
    echo "Table MyGuests created successfully";
} else {
    // Mostramos mensaje si hubo algún error en el proceso de creación
    echo "Error al crear la tabla: " . mysqli_error($conn);
}
// Cerramos la conexión
mysqli_close($conn);
?>