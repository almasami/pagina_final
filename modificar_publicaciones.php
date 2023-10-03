<?php
$consulta = ConsultarPublicacion($_GET['idpublicaciones']);

function ConsultarPublicacion($idpublicaciones)
{

    include 'php/conexion.php';
    $sentencia = "SELECT * FROM publicaciones WHERE idpublicaciones='" . $idpublicaciones . "' ";
    $resultado = $conexion->query($sentencia) or die("Error al consultar publicación" . mysqli_error($conexion));
    $fila = $resultado->fetch_assoc();

    return [
        $fila['idpublicaciones'],
        $fila['nombre'],
        $fila['descripcion'],
        $fila['imagen'],
    ];
}
?>
<html>

<head>
    <title>Modificar publicación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }
        .todo {
            margin: auto;
            width: 800px;
            border-collapse: separate;
            border-spacing: 10px 5px;
        }
        #contenido {
            margin: auto;
            width: 800px;
            border-collapse: separate;
            border-spacing: 10px 5px;
        }
    </style>
</head>

<body>
    <div class="todo">
        <div id="contenido">
            <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <h1>Modificar publicación</h1>
                <br>
                <form action="modificar_publicaciones2.php" method="POST"
                    style="border-collapse: separate; border-spacing: 10px 5px;">
                    <input type="hidden" name="no" value="<?php echo $_GET['idpublicaciones'] ?>">
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="idpublicaciones" value="<?php echo $_GET['idpublicaciones'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nombre publicación: </label>
                                <input type="text" id="producto" name="nombre" required value="<?php echo $consulta[1] ?>"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Descripcion: </label>
                                <input type="text" id="producto" required name="descripcion"
                                    value="<?php echo $consulta[2] ?>"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Imagen: </label>
                                <input type="text" id="producto" name="imagen" required value="<?php echo $consulta[3] ?>"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-success">Modificar</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
