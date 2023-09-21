<?php 
include ('./php/conexion.php');

if (isset($_GET['idpublicaciones'])) {
  $resultado = $conexion->query("SELECT * FROM publicaciones WHERE idpublicaciones=" . $_GET['idpublicaciones']) or die($conexion);

  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
  } else {
    header("Location: ./indexprueba.php");
  }
} else {
  header("Location: ./indexprueba.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $fila["tipo"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Add your other head elements here -->

    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      /* Add your custom styles here */
    </style>
  </head>
  <body>
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $fila["imagen"] ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila['nombre'] ?></h2>
            <p class="text-justify" ><?php echo $fila['descripcion'] ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 

    <!-- Add your JavaScript and other script links here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
