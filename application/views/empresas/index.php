<h1><?= $titulo?></h1>
<style>
    th{
        background: #2c3e50;
        color: #ecf0f1;
    }
    .btnright{
        position:absolute;
        /*right: 115px;
        top: 30px;*/
        right:8.3%;
        top:4%;
        background: #2c3e50;
        color: #ecf0f1;
    }
    .btnright:hover{
        background: #34495e;
        color: #bdc3c7;
    }
</style>
<button class="btn btnright">Nueva</button>
<table class="table">
<tr>
    <th>Nombre</th>
    <th>Nombre Comercial</th>
    <th>Telefono</th>
</tr>
<?php
    foreach ($empresas->result() as $empresa){

        echo "<tr><td>".$empresa->nombre."</td><td>".$empresa->nombreComercial."</td><td>".$empresa->telefono."</td></tr>";

    }
?>
</table>