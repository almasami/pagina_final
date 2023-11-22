<?php
include "php/conexion.php";
 
// Comprobar si se ha enviado el ID y la acción
if(isset($_GET['idconvocatoria']) && isset($_GET['accion'])) {
    $id = $_GET['idconvocatoria'];
    $accion = $_GET['accion'];
 
    if($accion == "eliminar") {
        // Lógica para eliminar la publicación
        $sentencia = "DELETE FROM convocatoria WHERE idconvocatoria = ?";
        $stmt = mysqli_prepare($conexion, $sentencia);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("Location: tabla_convocatoria.php"); // Redireccionar a la página principal
        exit;
    } else if($accion == "modificar") {
        // Redirigir a la página de modificación
        header("Location: modificar_convocatoria.php?idconvocatoria=" . $id);
        exit;
    }
}
?>

