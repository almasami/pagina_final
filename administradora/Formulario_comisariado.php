<?php
include("php/conexion.php");
 
if(isset($_POST['presidente'])) {
    $presidente = $_POST['presidente'];
    $secretario = $_POST['secretario'];
    $tesorero = $_POST['tesorero'];
    $vigilancia = $_POST['vigilancia'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
        $sql = "INSERT INTO comisariado (Presidente, Secretario, Tesorero, Vigilancia, Inicio, Fin) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssii', $presidente, $secretario, $tesorero, $vigilancia, $inicio, $fin);
        $success = mysqli_stmt_execute($stmt);
    
 
    if($success) {
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
<?php include("menu.php"); ?>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-4">
    <h1 class="tituloRegistro">Agregar Comisariado</h1>
    <form class="formulario" method="POST" action="Formulario_comisariado.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Ingrese el nombre de Presidente</label>
            <input type="text" class="form-control" name="presidente" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Escriba el nombre de Secretario</label>
            <input type="text" class="form-control" name="secretario" required>

        </div>
       
         <div class="mb-3">
            <label class="form-label">Escriba el nombre de Tesorero</label>
            <input type="text" class="form-control" name="tesorero" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Escriba el nombre de Vigilancia</label>
            <input type="text" class="form-control" name="vigilancia" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Escriba el inicio</label>
            <input type="number" class="form-control" name="inicio" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Escriba el fin</label>
            <input type="number" class="form-control" name="fin" required>
        </div>


        <button type="submit" class="btn btn-primary">Agregar Comisariado</button>
    </form>
    </div>
    </div>
    </div>

    <?php include("./layouts/footer.php"); ?>
     

   
</html>
