<?php
include "php/conexion.php";
 
// Inicializar las variables
$id = $titulo = $descripcion = $direcciones = "";
 
// Comprobar si se ha enviado el ID
if(isset($_GET['idgaleria'])) {
    $id = $_GET['idgaleria'];
 
    // Cargar los datos actuales de la publicación
    $sentencia = "SELECT * FROM galeria WHERE idgaleria = ?";
    $stmt = mysqli_prepare($conexion, $sentencia);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    if($fila = mysqli_fetch_assoc($resultado)) {
        $titulo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $direcciones = $fila['direcciones'];
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
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $direcciones = $_POST['direcciones'];
 
    // Actualizar la publicación
    $sentencia = "UPDATE galeria SET titulo = ?, descripcion = ?, direcciones = ? WHERE idgaleria = ?";
    $stmt = mysqli_prepare($conexion, $sentencia);
    mysqli_stmt_bind_param($stmt, "sssi", $titulo, $descripcion, $direcciones, $id);
    if(mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Publicación modificada con éxito'); window.location.href='indexadministrador.php';</script>";
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
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?idgaleria=" . $id; ?>">
<div class="form-group">
<label for="titulo">Título:</label>
<input type="text" class="form-control" id="titulo" name="titulo" required value="<?php echo $titulo; ?>">
</div>
<div class="form-group">
<label for="descripcion">Descripción:</label>
<textarea class="form-control" id="descripcion" name="descripcion" required><?php echo $descripcion; ?></textarea>
</div>
<div class="form-group">
<label for="direcciones">Direcciones:</label>
<input type="text" class="form-control" id="direcciones" name="direcciones" required value="<?php echo $direcciones; ?>">
</div>
<button type="submit" class="btn btn-primary">Modificar Publicación</button>
</form>
</div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>