<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from reserva where id = ?;");
    $sentencia->execute([$codigo]);
    $reserva = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarreservaproceso.php">
                    <div class="mb-3">
                        <label class="form-label">diain: </label>
                        <input type="text" class="form-control" name="txtdiain" required 
                        value="<?php echo $reserva->diain; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">diafin: </label>
                        <input type="text" class="form-control" name="txtdiafin" autofocus required
                        value="<?php echo $reserva->diafin; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">descripcion: </label>
                        <input type="text" class="form-control" name="txtdescripcion" autofocus required
                        value="<?php echo $reserva->descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_persona: </label>
                        <input type="text" class="form-control" name="txtid_persona" autofocus required
                        value="<?php echo $reserva->id_persona; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_habitacion: </label>
                        <input type="text" class="form-control" name="txtid_habitacion" autofocus required
                        value="<?php echo $reserva->id_habitacion; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $reserva->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>