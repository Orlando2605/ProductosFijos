<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR WORD & PDF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <br>

    <div class="container">
        <div class="col-sm-12">
            <h2 style="text-align: center;">PRODUCTOS DE ARCHIVOS FIJOS</h2>
            <br>
            <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar"> Agregar </button>



            </div>
            <br>
            <br>
            <br>


            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                LAPTOPS
                            </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Marca</th>
                            <th>Clave</th>
                            <th>Descripción</th>
                            <th>N° de Serie</th>
                            <th>Existecia</th>
                            <th>Usuarios</th>
                            <th>Costo</th>
                            <th>Factura</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require_once "../includes/db.php";
                       $consulta = mysqli_query($conexion, "SELECT * FROM documento WHERE categoria = 'Laptops'");
                       while ($fila = mysqli_fetch_assoc($consulta)):
                    

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['codigo'] ;?></td>
                            <td><?php echo $fila['marca'] ;?></td>
                            <td><?php echo $fila['clave'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['serie'] ;?></td>
                            <td><?php echo $fila['existencia'] ;?></td>
                            <td><?php echo $fila['usuarios'] ;?></td>
                            <td><?php echo $fila['costo'] ;?></td>
                            <td><?php echo $fila['factura'] ;?></td>
                                <td>
                                    <a href="../includes/download.php?id= <?php echo $fila['id'] ;?>" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="col-sm-12">
            <br>
            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Monitores
                            </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Marca</th>
                            <th>Clave</th>
                            <th>Descripción</th>
                            <th>N° de Serie</th>
                            <th>Existecia</th>
                            <th>Usuarios</th>
                            <th>Costo</th>
                            <th>Factura</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require_once "../includes/db.php";
                       $consulta = mysqli_query($conexion, "SELECT * FROM documento WHERE categoria = 'Monitores'");
                       while ($fila = mysqli_fetch_assoc($consulta)):
                    

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['codigo'] ;?></td>
                            <td><?php echo $fila['marca'] ;?></td>
                            <td><?php echo $fila['clave'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['serie'] ;?></td>
                            <td><?php echo $fila['existencia'] ;?></td>
                            <td><?php echo $fila['usuarios'] ;?></td>
                            <td><?php echo $fila['costo'] ;?></td>
                            <td><?php echo $fila['factura'] ;?></td>
                                <td>
                                    <a href="../includes/download.php?id= <?php echo $fila['id'] ;?>" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>




    <div class="container">
        <div class="col-sm-12">
            <br>
            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Impresoras
                            </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Marca</th>
                            <th>Clave</th>
                            <th>Descripción</th>
                            <th>N° de Serie</th>
                            <th>Existecia</th>
                            <th>Usuarios</th>
                            <th>Costo</th>
                            <th>Factura</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require_once "../includes/db.php";
                       $consulta = mysqli_query($conexion, "SELECT * FROM documento WHERE categoria = 'Impresoras'");
                       while ($fila = mysqli_fetch_assoc($consulta)):
                    

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['codigo'] ;?></td>
                            <td><?php echo $fila['marca'] ;?></td>
                            <td><?php echo $fila['clave'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['serie'] ;?></td>
                            <td><?php echo $fila['existencia'] ;?></td>
                            <td><?php echo $fila['usuarios'] ;?></td>
                            <td><?php echo $fila['costo'] ;?></td>
                            <td><?php echo $fila['factura'] ;?></td>
                                <td>
                                    <a href="../includes/download.php?id= <?php echo $fila['id'] ;?>" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="col-sm-12">
            <br>
            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Telefonos
                            </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Marca</th>
                            <th>Clave</th>
                            <th>Descripción</th>
                            <th>N° de Serie</th>
                            <th>Existecia</th>
                            <th>Usuarios</th>
                            <th>Costo</th>
                            <th>Factura</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require_once "../includes/db.php";
                       $consulta = mysqli_query($conexion, "SELECT * FROM documento WHERE categoria = 'Telefono'");
                       while ($fila = mysqli_fetch_assoc($consulta)):
                    

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['codigo'] ;?></td>
                            <td><?php echo $fila['marca'] ;?></td>
                            <td><?php echo $fila['clave'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['serie'] ;?></td>
                            <td><?php echo $fila['existencia'] ;?></td>
                            <td><?php echo $fila['usuarios'] ;?></td>
                            <td><?php echo $fila['costo'] ;?></td>
                            <td><?php echo $fila['factura'] ;?></td>
                                <td>
                                    <a href="../includes/download.php?id= <?php echo $fila['id'] ;?>" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
<style>
    a {
        text-decoration: none;
    }

    .s {
        padding-top: 50px;
        text-align: center;
    }
</style>

<footer>
    <p class="s">KGE SOLUTIONS</p>
</footer>

<?php include "agregar.php"; ?>

</html>