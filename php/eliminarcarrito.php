<?php 
session_start();
$arreglo =$_SESSION['carrito'];
for($i=0;$i<count($arreglo);$i++){
	if ($arreglo[$i]['Idproducto']!=$_POST['id']){
$arregloNuevo[]=array(
'Idproducto'=>$arreglo[$i]['Idproducto'],
'Nombre'=>$arreglo[$i]['Nombre'],
'Precio'=>$arreglo[$i]['Precio'],
'Imagen'=>$arreglo[$i]['Imagen'],
'Cantidad'=>$arreglo[$i]['Cantidad']
);


	}}
if(isset($arregloNuevo)){
	$_SESSION['carrito']=$arregloNuevo;
}else{
	unset($_SESSION['carrito']);
}
echo "Se ha borrado el producto de su carrito de compras";
?>