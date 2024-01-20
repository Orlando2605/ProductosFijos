<?php

// Comprobar si se ha cargado un archivo
if (isset($_FILES['factura'])) {
    extract($_POST);
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $clave = $_POST['clave'];
    $descripcion = $_POST['descripcion'];
    $serie = $_POST['serie'];
    $existencia = $_POST['existencia'];
    $usuarios = $_POST['usuarios'];
    $costo = $_POST['costo'];
    $lugar = $_POST['lugar'];
    $categoria = $_POST['categoria'];

    // Definir la carpeta de destino
    $carpeta_destino = "files/";

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES["factura"]["name"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {


        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["factura"]["tmp_name"], $carpeta_destino . $nombre_archivo)) {
            // Insertar la información del archivo en la base de datos
            include "db.php";
            $sql = "INSERT INTO documento (codigo, marca, clave, descripcion, serie, existencia, usuarios, costo, factura, lugar, categoria) 
            VALUES ( '$codigo', '$marca', '$clave', '$descripcion', '$serie', '$existencia', '$usuarios', '$costo','$nombre_archivo', '$lugar', '$categoria')";
            $resultado = mysqli_query($conexion, $sql);
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('../views/index.php');
                </script>";
            } else {

                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('../views/index.php');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('../views/index.php');
            </script>";
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, DOC y DOCX.');
        location.assign('../views/index.php');
        </script>";
    }
}
