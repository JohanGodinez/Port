<h1><?= $titulo?></h1>
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