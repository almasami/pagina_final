<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ganadería</title>
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
    <div class="logo"><a href="indexprueba.php" class="nav-bar-logo"><img src="imagenes\logos\toro.png" ></a></div>
    <div class="d-flex justify-content-center align-items-center h-100">
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

           
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-5">
    <?php
    include('./php/conexion.php');
    $resultado = $conexion->query("SELECT * FROM publicaciones WHERE tipo='GANADERIA' ORDER BY idpublicaciones DESC LIMIT 5") or die($conexion);
    while ($fila = mysqli_fetch_array($resultado)) {
        ?>
        <div class="col-12 mb-4" data-aos="fade-up">
            <div class="block-4 text-center border" style= "background-color: #E2F9F5">
                <figure class="block-4-image">
                    <a href="descripcionpublicaciones.php?idpublicaciones=<?php echo $fila['idpublicaciones']; ?>">
                        <img src="<?php echo $fila['imagen']; ?>" width="250" height="250">
                    </a>
                </figure>
                <div class="block-4-text p-4">
                    <h3><a href="descripcionpublicaciones.php?idpublicaciones=<?php echo $fila['idpublicaciones']; ?>">
                            <?php echo $fila['nombre']; ?>
                        </a></h3>
                    <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

            </div>
        
          </div>

         
            </div>

            

             
          </div>
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