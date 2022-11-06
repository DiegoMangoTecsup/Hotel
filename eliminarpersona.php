<?php 
    if(!isset($_GET['codigo'])){
        header('Location: verdetallepersona.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: verdetallepersona.php?mensaje=eliminado');
    } else {
        header('Location: verdetallepersona.php?mensaje=error');
    }
    
?>