<?php
include "php/conexion.php";
 
// Comprobar si se ha enviado el ID y la acción
if(isset($_GET['idcomisariado']) && isset($_GET['accion'])) {
    $id = $_GET['idcomisariado'];
    $accion = $_GET['accion'];
 
    if($accion == "eliminar") {
        // Lógica para eliminar la publicación
        $sentencia = "DELETE FROM comisariado WHERE idcomisariado = ?";
        $stmt = mysqli_prepare($conexion, $sentencia);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("Location: tabla_comisariado.php"); // Redireccionar a la página principal
        exit;
    } else if($accion == "modificar") {
        // Redirigir a la página de modificación
        header("Location: modificar_comisariado.php?idcomisariado=" . $id);
        exit;
    }
}
?>

