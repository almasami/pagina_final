<?php
include("php/conexion.php");

if(isset($_POST['txtnombre'])) {
    $nombre = $_POST['txtnombre'];
    $descripcion = $_POST['txtdescripcion'];
    $nombreimagen = $_POST['txtimagen'];
    $tipopublicacion = $_POST['txttipo'];

    $sql = "INSERT INTO publicaciones (nombre, descripcion, imagen, tipo, idusuarios)
            VALUES ('$nombre', '$descripcion', '$nombreimagen', '$tipopublicacion', 1)"; // Replace '1' with actual user ID

    if(mysqli_query($conexion, $sql)) {
        echo '
        <script type="text/javascript">
        alert("Se ha agregado un nuevo producto");
        window.location="indexadministrador.php";
        </script>';
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>

<html>
<head>
<title>Ejido Núcleo Agrario</title>
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

    <link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="site-wrap">
<?php include("./layouts/header.php"); ?>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-4">
    <h1 class="tituloRegistro">Agregar publicaciones</h1>
    <form class="formulario" method="POST" action="Formularioinsertar.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Ingrese el nombre</label>
            <input type="text" class="form-control" name="txtnombre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Ingrese una descripción</label>
            <textarea type="text" class="form-control" name="txtdescripcion" required>
</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Ingrese una imagen o archivo</label>
            <input type="text" class="form-control" name="txtimagen" required>
        </div>
        <div class="mb-3">
            <label for="sel1">Seleccione el tipo de publicación:</label>
            <select class="form-control" id="sel1" name="txttipo">
                
            <option value="CENTENARIO">CENTENARIO</option>
                <option value="COMISARIADO">COMISARIADO</option>
                <option value="AGRICULTURA">AGRICULTURA</option>
                <option value="GANADERIA">GANADERÍA</option>
                <option value="CELEBRACION">CELEBRACIÓN</option>
                <option value="DOTACIONES" >DOTACIONES</option>
                <option value="EJIDATARIOS">EJIDATARIOS</option>
                <option value="CONVOCATORIA">CONVOCATORIA</option>
                <option value="EJIDO">EJIDO</option>
                <option value="ENCUENTRANOS">ENCUÉNTRANOS</option>
                <option value="GALERIA">GALERÍA</option>
                <option value="PRESAS">PRESAS</option>
                <option value="PRODUCCIONAGRICOLA" >PRODUCCIÓN AGRÍCOLA</option>
                <option value="PRODUCCIONGANADERA">PRODUCCIÓN GANADERA</option>
                <option value="RIEGO">RIEGO</option>
                <option value="TEMPORAL">TEMPORAL</option>
                <option value="USOCOMUN">USO COMÚN</option>


            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Publicación</button>
    </form>
    </div>
    </div>
    </div>

    <?php include("./layouts/footer.php"); ?>
     

   
</html>
