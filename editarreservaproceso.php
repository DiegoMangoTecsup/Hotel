<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $diain = $_POST['txtdiain'];
    $diafin = $_POST['txtdiafin'];
    $descripcion = $_POST['txtdescripcion'];
    $id_persona = $_POST['txtid_persona'];
    $id_habitacion = $_POST['txtid_habitacion'];

    $sentencia = $bd->prepare("UPDATE reserva SET diain = ?, diafin = ?, descripcion = ?, id_persona = ?, id_habitacion = ? where id = ?;");
    $resultado = $sentencia->execute([$diain, $diafin, $descripcion, $id_persona, $id_habitacion,$codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
