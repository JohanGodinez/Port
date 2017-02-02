<!DOCTYPE html>
<html>
    <head>
        <title>Cuentas</title>
    </head>
    <body> 
        <h1><?= $string?></h1>
        <?= form_open("/cuentas/insert")?>
        <?php
            $nombre = array("name" => "nombreCuenta",'placeholder' => "Nombre");
            $telefono = array('name' => 'telefonoCuenta','placeholder' => 'Telefono');
            $correo = array('name' => 'correoCuenta','placeholder' => 'Correo');
        ?>
            <div>
                <label>Nombre</label>
                <?= form_input($nombre)?>
            </div>
            <div>
                <label>Telefono</label>
                <?= form_input($telefono)?>
            </div>
            <div>
                <label>Correo</label>
                <?= form_input($correo)?>
            </div>
            <div>
                <button>Guardar</button>
            </div>
        <?= form_close()?>
    </body>
</html>