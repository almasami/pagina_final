<?php
include "php/conexion.php";
 
// Inicializar las variables
$id = $nombre = $descripcion = $file = "";
 
// Comprobar si se ha enviado el ID
if(isset($_GET['idconvocatoria'])) {
    $id = $_GET['idconvocatoria'];
 
    // Cargar los datos actuales de la publicación
    $sentencia = "SELECT * FROM convocatoria WHERE idconvocatoria = ?";
    $stmt = mysqli_prepare($conexion, $sentencia);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    if($fila = mysqli_fetch_assoc($resultado)) {
        $nombre = $fila['nombre'];
        $descripcion = $fila['descripcion'];
        $file = $fila['file'];
    } else {
        echo "Error: No se pudo cargar la publicación";
        exit;
    }
} else {
    echo "Error: No se especificó el ID de la publicación";
    exit;
}
 
// Comprobar si el formulario ha sido enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $file = $_POST['file'];
 
    // Actualizar la publicación
    $sentencia = "UPDATE convocatoria SET nombre = ?, descripcion = ?, file = ? WHERE idconvocatoria = ?";
    $stmt = mysqli_prepare($conexion, $sentencia);
    mysqli_stmt_bind_param($stmt, "sssi", $nombre, $descripcion, $file, $id);
    if(mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Publicación modificada con éxito'); window.location.href='tabla_convocatoria.php';</script>";
    } else {
        echo "Error al actualizar la publicación: " . mysqli_error($conexion);
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Modificar Publicación</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            margin-bottom: 30px;
        }
</style>
</head>
<body>
<div class="container">
<h1>Modificar Publicación</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?idconvocatoria=" . $id; ?>">
<div class="form-group">
<label for="nombre">Nombre:</label>
<input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $nombre; ?>">
</div>
<div class="form-group">
<label for="descripcion">Descripción:</label>
<textarea class="form-control" id="descripcion" name="descripcion" required><?php echo $descripcion; ?></textarea>
</div>
<div class="form-group">
<label for="file">file:</label>
<input type="text" class="form-control" id="file" name="file" required value="<?php echo $file; ?>">
</div>
<button type="submit" class="btn btn-primary">Modificar Publicación</button>
</form>
</div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>