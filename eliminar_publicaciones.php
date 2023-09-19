<?php 
Eliminarpublicaciones($_GET['idpublicaciones']);

function Eliminarpublicaciones($idpublicaciones)
{
	include 'php/conexion.php';
	$sentencia="delete from publicaciones where idpublicaciones='".$idpublicaciones."'";
	$conexion->query($sentencia) or die("Error al borrar ganaderia".mysqli_error($conexion));
}

?>
<script type="text/javascript">
	alert("publicacion eliminado");
	window.location.href='indexadministrador.php';

</script>