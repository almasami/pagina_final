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
                    <th>Fin</th>
                
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                include "php/conexion.php";
                $sentencia = "select * from comisariado";
                $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    
                    echo "<td>" . $fila['No.'] . "</td>";
                    echo "<td>" . $fila['Presidente'] . "</td>";
                    echo "<td>" . $fila['Secretario'] . "</td>";
                    echo "<td>" . $fila['Tesorero'] . "</td>";
                    echo "<td>" . $fila['Vigilancia'] . "</td>";
                    echo "<td>" . $fila['Inicio'] . "</td>";
                    echo "<td>" . $fila['Fin'] . "</td>";
                    


                   
                   
                }
                ?>
               
  
  <tr>
  <th>1</th>
    <td>Francisco Rojas</td>
    <td>Abdón Moreno</td>
    <td>Inocente Mejía</td>
    <td>Jesús María Chacón</td>
    <td class="1924">1924</td>
    <td></td>
  </tr>
  <tr>
  <th>2</th>
    <td>Manuel Luján Varela</td>
    <td>Mariano López Olivas</td>
    <td>Ismael Flores Ávila</td>
    <td>Tomás Lucero Talamantes</td>
    <td class="1971">1971</td>
    <td></td>
  </tr>
  <tr>
  <th>3</th>
    <td>Miguel López</td>
    <td>Rafael Díaz Prado</td>
    <td>Salvador Baca</td>
    <td>Victoriano Mora</td>
    <td class="1992">1992</td>
    <td></td>
  </tr>
  <tr>
  <th>4</th>
    <td>Manuel Noé Heras Luján</td>
    <td>Marín Alonso Martínez Chávez</td>
    <td>José Luis Pérez Meléndez</td>
    <td>Gilberto Bañuelos González</td>
    <td class="1992">1992</td>
    <td>1995</td>
  </tr>
  <tr>
  <th>5</th>
    <td>José María Baca</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="1996">1996</td>
    <td>1999</td>
  </tr>
  <tr>
  <th>6</th>
    <td>Javier Mendoza Valdez</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="1999">1999</td>
    <td>2002</td>
  </tr>
  <tr>
  <th>7</th>
    <td>Manuel Noé Heras Luján</td>
    <td>Isidro Meléndez Meléndez.</td>
    <td>Israel Rentería Heras</td>
    <td>Amadito Olvera Hernández</td>
    <td class= "2002">2002</td>
    <td>2005</td>
  </tr>
  <tr>
  <th>8</th>
    <td>Héctor Gallegos Esparza</td>
    <td>Rafael Díaz Prado</td>
    <td>Julián Ledezma</td>
    <td>Jesús Veloz Trejo</td>
    <td class= "2005">2005</td>
    <td>2008</td>
  </tr>
  <tr>
    
  <th>9</th>
    <td>Mónico Corona Rentería</td>
    <td>Javier Pérez Meléndez</td>
    <td>José Luis Pérez Ramírez</td>
    <td>Delfino Mora Villalba</td>
    <td class= "2008">2008</td>
    <td>2011</td>

  </tr>
  <tr>
  <th>10</th>
    <td>Saúl Baca Carbajal</td>
    <td>Israel Rentería Heras</td>
    <td>Armando Rodríguez Guillén</td>
    <td>Juan Alberto López Escalante</td>
    <td class= "2011">2011</td>
    <td>2014</td>
  </tr>
  <tr>
  <th>11</th>
    <td>Javier Marín González</td>
    <td>Rubén Rodríguez Guillén</td>
    <td>Jorge Corona Guillén</td>
    <td>Benigno Mora Sánchez</td>
    <td class= "2014">2014</td>
    <td>2017</td>
  </tr>
  <tr>
  <th>12</th>
    <td>Mauro Corona Quezada</td>
    <td>José Corona Rentería</td>
    <td>Samuel López Quezada</td>
    <td>Felipe Rentería Heras</td>
    <td class="2017">2017</td>
    <td>2020</td>
  </tr>
  <tr>
  <th>13</th>
    <td>Rubén Rodríguez Guillén</td>
    <td>José Fermín Villa Ortiz</td>
    <td>Miguel Ángel Amaya Mora</td>
    <td>Rubén López Escalante</td>
    <td class= "2020">2020</td>
    <td>2022</td>
  </tr>
  <tr>
  <th>14</th>
    <td>Alma Rosa Díaz Torres</td>
    <td>José Fermín Villa Ortiz</td>
    <td>Miguel Ángel Amaya Mora</td>
    <td>Rubén López Escalante</td>
    <td class= "2022">2022</td>
    <td>2023</td>

  </tr>
  <tr>
  <th>15</th>
    <td>Cruz Rentería Heras</td>
    <td>Eduardo Martínez Rentería</td>
    <td>Isaí Daniel López Aldavaz</td>
    <td>Felipe Rentería Heras</td>
    <td class= "2023">2023</td>
    <td></td>

  </tr>

            </tbody>
        </table>
    </div> 
</div>
<?php include("./layouts/footer.php"); ?>
</body>

</html>
