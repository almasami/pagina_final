<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
            margin: 30px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
            color: #343a40;
            font-weight: bold;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        .btn-modify,
        .btn-delete {
            padding: 6px 12px;
            border-radius: 3px;
        }
        .btn-modify {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
<?php 
                  include("menu.php"); ?>
    <div class="container mt-5">
        <h1 class="text-center">ADMINISTRADOR DE PUBLICACIONES</h1>
        <a href="Formularioinsertar.php" class="btn btn-primary mb-3">Agregar Contenido </a>
        <a href="indexadministrador.php" class="btn btn-primary mb-3">Tabla publicaciones</a>
        <a href="tabla_comisariado.php" class="btn btn-primary mb-3">Tabla Comisariado</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Comisariado</th>
                    <th>Presidente</th>
                    <th>Secretario</th>
                    <th>Tesorero</th>
                    <th>Vigilancia</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "php/conexion.php";
               

                function muestraTable(){ 
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
                        echo "<td>" . $fila['Inicio'] . "</td>";
                        echo "<td>" . $fila['Fin'] . "</td>";
                       
                        echo "<td>
                        <a href='gestionar_comisariado.php?idcomisariado=". $fila['idcomisariado']."&accion=modificar' class='btn btn-modify'>Modificar</a>
                           <a href='gestionar_comisariado.php?idcomisariado=". $fila['idcomisariado']."&accion=eliminar' class='btn btn-delete'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                }
                muestraTable();                ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
