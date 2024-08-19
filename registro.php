<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta DB</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
            font-size: 1.1em;
        }
        td {
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

</body>
</html>

<?php
// Validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Hacemos llamado al input de formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$grado = $_POST["grado"];
$seccion = $_POST["seccion"];
$f_nacimiento = $_POST["f_nacimiento"];
$promedio = $_POST["promedio"];

// Verificamos la conexión a la base de datos
if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
}

// Indicamos el nombre de la base de datos
$datab = "bdformulario";

// Seleccionamos la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    die("No se ha podido encontrar la base de datos: " . mysqli_error($connection));
}

// Insertamos datos de registro en MySQL
$instruccion_SQL = "INSERT INTO tabla_formm (id, nombre, telefono, grado, seccion, f_nacimiento, promedio)
                     VALUES ('$id', '$nombre', '$telefono', '$grado', '$seccion', '$f_nacimiento', '$promedio')";

$resultado = mysqli_query($connection, $instruccion_SQL);

if (!$resultado) {
    die("Error al insertar los datos: " . mysqli_error($connection));
} else {
    echo "<h3>Datos insertados correctamente</h3>";
}

// Consultamos todos los registros de la tabla
$consulta = "SELECT * FROM tabla_formm";
$result = mysqli_query($connection, $consulta);

if (!$result) {
    die("No se ha podido realizar la consulta: " . mysqli_error($connection));
}

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Teléfono</th>";
echo "<th>Grado</th>";
echo "<th>Sección</th>";
echo "<th>Fecha de Nacimiento</th>";
echo "<th>Promedio</th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $colum['id'] . "</td>";
  echo "<td>" . $colum['nombre'] . "</td>";
  echo "<td>" . $colum['telefono'] . "</td>";
  echo "<td>" . $colum['grado'] . "</td>";
  echo "<td>" . $colum['seccion'] . "</td>";
  echo "<td>" . $colum['f_nacimiento'] . "</td>";
  echo "<td>" . $colum['promedio'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($connection);

echo '<a href="index.html">Volver Atrás</a>';
?>
