<?php
include "php/conexion.php";
 
// Inicializar las variables
$id = $presidente = $secretario = $tesorero =$vigilancia = $inicio = $fin = "";
 
// Comprobar si se ha enviado el ID
if(isset($_GET['idcomisariado'])) {
    $id = $_GET['idcomisariado'];
 
    // Cargar los datos actuales de la publicación
    $sentencia = "SELECT * FROM comisariado WHERE idcomisariado = ?";
    $stmt = mysqli_prepare($conexion, $sentencia);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    if($fila = mysqli_fetch_assoc($resultado)) {
        $presidente = $fila['presidente'];
        $secretario = $fila['secretario'];
        $tesorero = $fila['tesorero'];
        $vigilancia = $fila['vigilancia'];
        $inicio = $fila['inicio'];
        $fin = $fila['fin'];




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
   
    $presidente = $_POST['presidente'];
    $secretario = $_POST['secretario'];
    $tesorero = $_POST['tesorero'];
    $vigilancia = $_POST['vigilancia'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];





 
    // Actualizar la publicación
    $sentencia = "UPDATE comisariado SET presidente = ?, secretario = ?,   
    $presidente = $fila['presidente'];
        $secretario = $fila['secretario'];
        $tesorero = $fila['tesorero'];
        $vigilancia = $fila['vigilancia'];
        $inicio = $fila['inicio'];
        $fin = $fila['fin'];direcciones = ? WHERE idgaleria = ?";
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