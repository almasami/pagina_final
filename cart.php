<?php 
session_start();
include ('./php/conexion.php');
if (isset($_SESSION['carrito'])) {
	if(isset($_GET['idproducto'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for($i=0; $i<count($arreglo);$i++){
	if ($arreglo[$i]['Idproducto']==$_GET['idproducto']) {
$encontro=true;
$numero=$i;

			}
}
if($encontro==true){
	$arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
	$_SESSION['carrito']=$arreglo;
	}else{

		//no esta en el registro
		$nombre="";
	$precio="";
	$imagen="";
	$res=$conexion->query('select * from productos where idproducto='.$_GET['idproducto']) or die($conexion->error);
	$fila=mysqli_fetch_row($res);	
	$nombre=$fila[1];
	$precio=$fila[3];
	$imagen=$fila[4];
	$arregloNuevo= array(
        'Idproducto'=>$_GET['idproducto'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Imagen'=>$imagen,
        'Cantidad'=>1
	);
	array_push($arreglo, $arregloNuevo);
	$_SESSION['carrito']=$arreglo;
	}
}
}else{
	//creamos la variables de sesion
	if (isset($_GET['idproducto'])){
	$nombre="";
	$precio="";
	$imagen="";
	$res=$conexion->query('select * from productos where idproducto='.$_GET['idproducto']) or die($conexion->error);
	$fila=mysqli_fetch_row($res);	
	$nombre=$fila[1];
	$precio=$fila[3];
	$imagen=$fila[4];
	$arreglo[] = array(
        'Idproducto'=>$_GET['idproducto'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Imagen'=>$imagen,
        'Cantidad'=>1
	);
	$_SESSION['carrito']=$arreglo;
	} 
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
if (isset($_SESSION['carrito'])){
	$arregloCarrito=$_SESSION['carrito'];
	for($i=0;$i<count($arregloCarrito);$i++){
	        	?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="imagenes/<?php echo $arregloCarrito[$i]['Imagen'];?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['Nombre'];?></h2>
                    </td>
                    <td>$<?php echo $arregloCarrito[$i]['Precio'];?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="<?php echo $arregloCarrito[$i]['Cantidad'];?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$<?php echo $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'];?></td>
                    
<td><a href="#" class="btn btn-primary btn-sm  btnEliminar" data-id="<?php echo $arregloCarrito[$i]['Idproducto'];?>">X</a></td>
                  </tr>
<?php }}?>
                 
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon"></label>
                <p></p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
               
              </div>
              <div class="col-md-4">
               
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Compra Total</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Imprimir</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script>
  	$(document).ready(function(){
  		$(".btnEliminar").click(function(event)){
  			event.preventDefault();
  			var id =$(this).data('id');
  			var boton = $(this);
  			$.ajax({
  				method: 'POST',
  				url:'./php/eliminarcarrito.php',
  				data:{
  					id:id
  				}
  			}).done(function(respuesta){
  				boton.parent('td').parent('tr').remove();
  			});	});
  		
  		});

  </script>
    
  </body>
</html>