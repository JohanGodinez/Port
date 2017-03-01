<h1><?= $titulo?></h1>
<section class="container">
    <?php $attributes = array('class' => 'form col-md-6 col-md-offset-3', 'id' => 'from'); ?>
    <?= form_open('/productos/insert',$attributes)?>
    <?php
        $nombre = array('name' => 'nombre', 'class' => 'form-control' );
        $cantidad = array('name' => 'cantidad', 'class' => 'form-control' );
        $precio = array('name' => 'precio', 'class' => 'form-control', 'aria-describedby' => 'dolar' );
        $descripcion = array('name' => 'descripcion', 'class' => 'form-control', 'rows' => '4' );
        $producto = array('name' => 'descripcion', 'type' => 'checkbox', 'class' => 'form-control');
    ?>
    <div class="form-group">
        <label class="control-label">Nombre</label>
        <?= form_input($nombre)?>
    </div>
    <div class="form-group">
        <label class="control-label">cantidad</label>
        <?= form_input($cantidad)?>
    </div>
    <div class="form-group">
        <label class="control-label">precio</label>
        <div class="input-group">
            <?= form_input($precio)?>
            <span class="input-group-addon" id="dolar">$</span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">descripcion</label>
        <?= form_textarea($descripcion)?>
    </div>
    <div class="form-group">
        <button class="btn btnright">Nueva</button>
    </div>
    <?= form_close()?>
</section>