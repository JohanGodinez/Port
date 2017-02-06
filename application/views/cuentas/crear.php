<h1 class="text-center"><?= $string?></h1>
<style>
    .form-control, .btn{
        border-radius: 0;
        border-color: #27ae60;
    }
</style>
<?php
    $attributes = array('class' => 'form col-md-6 col-md-offset-3', 'id' => 'from');
 ?>
<?= form_open("/cuentas/insert",$attributes)?>
<?php
    $nombre = array('name' => 'nombreCuenta', 'class' => 'form-control' );
    $telefono = array('name' => 'telefonoCuenta', 'class' => 'form-control' );
    $correo = array('name' => 'correoCuenta', 'class' => 'form-control' );
?>
    <div class="form-group">
        <label class="control-label">Nombre</label>
        <?= form_input($nombre)?>
    </div>
    <div class="form-group">
        <label class="control-label">Telefono</label>
        <?= form_input($telefono)?>
    </div>
    <div class="form-group">
        <label class="control-label">Correo</label>
        <?= form_input($correo)?>
    </div>
    <div class="form-group col-sm-6 col-sm-offset-3">
        <button class="btn btn-default btn-block"><strong>Crear cuenta</strong></button>
    </div>
<?= form_close()?>