<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Galería</title>
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

    
      <?php
    include('./php/conexion.php');
    $resultado = $conexion->query("SELECT * FROM galeria") or die($conexion);
    while ($fila = mysqli_fetch_array($resultado)) {
        ?>
        <div class="col-12 mb-4" data-aos="fade-up">
            <div class="block-4 text-center border <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100 text-black " style= "background-color: #E2F9F5">
    <figure class="block-4-image card-img-top">

<video   controls>
  <source src="<?php echo $fila['direcciones']; ?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
                       
                </figure>
      <div class="card-body">
        <h5 class="card-title"><?php echo $fila['titulo']; ?></h5>
        <p class="card-text">"<?php echo $fila['descripcion']; ?>"</p>
      </div>
    </div>
  </div>
 
 

               
            </div>
        </div>
    <?php
    }
    ?>

           
    </div>
    </div>
 

  
<?php include("./layouts/footer.php"); ?> 
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>
 
</body>
</html>
