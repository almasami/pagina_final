<?php
include ("conexion.php");
session_start();
$usuario=$_POST['txtusuario'];
$pass=$_POST['txtpassword'];
$sql="select * from usuarios where username='".$usuario."' and password='".$pass."'";
$resultado=mysqli_query($conexion, $sql);
$fila=mysqli_num_rows($resultado);
if ($fila>0){
	echo 'se ha encontrado un registro';
	header("location:../indexadministrador.php");
}
else{
	echo 'No se encuentra en la base de datos';
}
?>