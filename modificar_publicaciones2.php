<?php
	
	ModificarPublicacion($_POST['idpublicaciones'], $_POST['nombre'], $_POST['descripcion'],  $_POST['imagen']);

	function ModificarPublicacion($idpublicaciones, $nombre, $descripcion, $imagen)
	{
		include 'php/conexion.php';
		$sentencia = "UPDATE publicaciones SET nombre='".$nombre."', descripcion='".$descripcion."', imagen='".$imagen."' WHERE idpublicaciones='".$idpublicaciones."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamente!!");
	window.location.href = 'indexadministrador.php'; // Ajusta la ruta según corresponda
</script>
