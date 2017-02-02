<h1><?= $titulo?></h1>
<style>
    .form-control, .btn{
        border-radius: 0;
        border-color: #27ae60;
    }
</style>
<?php
    $attributes = array('class' => 'form col-md-4 col-md-offset-4', 'id' => 'from');
 ?>
<?= form_open("/cuentas/insert",$attributes)?>
<?php
    $tipoempresaid = array('name' => 'tipoempresaid', 'class' => 'form-control' );
    $nombre = array('name' => 'nombre', 'class' => 'form-control' );
    $nombrecomercial = array('name' => 'nombrecomercial', 'class' => 'form-control' );
    $telefono = array('name' => 'telefono', 'class' => 'form-control' );
    $direccion = array('name' => 'direccion', 'class' => 'form-control' );
?>
    <div class="form-group">
        <label class="control-label">Nombre</label>
        <?= form_input($tipoempresaid)?>
    </div>
    <div class="form-group">
        <label class="control-label">Nombre</label>
        <?= form_input($nombre)?>
    </div>
    <div class="form-group">
        <label class="control-label">Nombre</label>
        <?= form_input($nombrecomercial)?>
    </div>
    <div class="form-group">
        <label class="control-label">Telefono</label>
        <?= form_input($telefono)?>
    </div>
    <div class="form-group">
        <label class="control-label">Correo</label>
        <?= form_input($direccion)?>
    </div>
    <div class="form-group col-sm-6 col-sm-offset-3">
        <button class="btn btn-default btn-block"><strong>Crear cuenta</strong></button>
    </div>
<?= form_close()?>