<h1><?= $string?></h1>
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
        /*background: #2c3e50;
        color: #ecf0f1;*/
    }
    /*.btnright:hover{
        background: #34495e;
        color: #bdc3c7;
    }*/
</style>
<a class="btn btnright" href="/index.php/productos/crear">Nueva</a>
<table class="table">
<tr>
    <th>Nombre</th>
    <th>categoira</th>
    <th>Cantidad</th>
    <th>Precio</th>
</tr>
<tr>
    <td>Nombre</td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<?php
    // foreach ($empresas->result() as $empresa){

    //     echo "<tr><td>Pinolero".$empresa->nombre."</td><td>".$empresa->nombreComercial."</td><td>".$empresa->telefono."</td></tr>";

    // }
?>
</table>