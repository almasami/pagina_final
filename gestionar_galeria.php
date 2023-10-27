<?php
include "php/conexion.php";
 
// Comprobar si se ha enviado el ID y la acción
if(isset($_GET['idgaleria']) && isset($_GET['accion'])) {
    $id = $_GET['idgaleria'];
    $accion = $_GET['accion'];
 
    if($accion == "eliminar") {
        // Lógica para eliminar la publicación
        $sentencia = "DELETE FROM galeria WHERE idgaleria = ?";
        $stmt = mysqli_prepare($conexion, $sentencia);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("Location: tabla_galeria.php"); // Redireccionar a la página principal
        exit;
    } else if($accion == "modificar") {
        // Redirigir a la página de modificación
        header("Location: modificar_galeria.php?idgaleria=" . $id);
        exit;
    }
}
?>

