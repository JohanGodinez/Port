<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/stilo.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    h1{
        margin-top: 100px
    }
</style>
<h1 class="text-center"><?= $string?></h1>
<?php
    $attributes = array('class' => 'form col-md-4 col-md-offset-4', 'id' => 'from');
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