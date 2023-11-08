<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Comisariado</title>
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
    
    <link rel="stylesheet" href="css/estilos.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>
<div class="container mt-5">
        <h1 class="text-center">Mesa Directiva</h1>
        
        <table class="estilo-tabla">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Presidente</th>
                    <th>Secretario</th>
                    <th>Tesorero</th>
                    <th>Vigilancia</th>
                    <th class= "inicio">Inicio</th>
                    <th class= "fin">Fin</th>
                
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                include "php/conexion.php";
                $sentencia = "select * from comisariado";
                $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    
                    echo "<td>" . $fila['idcomisariado'] . "</td>";
                    echo "<td>" . $fila['Presidente'] . "</td>";
                    echo "<td>" . $fila['Secretario'] . "</td>";
                    echo "<td>" . $fila['Tesorero'] . "</td>";
                    echo "<td>" . $fila['Vigilancia'] . "</td>";
                    echo "<td class= 'inicio'>" . $fila['Inicio'] . "</td>";
                    echo "<td class= 'fin'>" . $fila['Fin'] . "</td>";
                    


                   
                   
                }
                ?>
               
  
             </tbody>
        </table>
    </div> 
</div>
<?php include("./layouts/footer.php"); ?>
</body>

</html>
