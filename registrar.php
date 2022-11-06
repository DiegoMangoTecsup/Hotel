<?php
if (empty($_POST["oculto"]) ||empty($_POST["txtId"]) || empty($_POST["txtNombres"]) || empty($_POST["txtApellido_paterno"]) || empty($_POST["txtApellido_materno"]) || empty($_POST["txtFecha_nacimiento"] || empty($_POST["txtCelular"]))) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$id = $_POST["txtId"];
$nombres = $_POST["txtNombres"];
$apellido_paterno = $_POST["txtApellido_paterno"];
$apellido_materno = $_POST["txtApellido_materno"];
$fecha_nacimiento = $_POST["txtFecha_nacimiento"];
$celular = $_POST["txtCelular"];

$sentencia = $bd->prepare("INSERT INTO persona (id, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, celular) VALUES (?,?,?,?,?,?);");
$resultado = $sentencia->execute([$id, $nombres, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $celular]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}