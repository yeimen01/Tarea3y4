<?php

plantilla::aplicar();

?>
<br>
<h3 class='text-center'>Reportes de ventas</h3>
<br><br>
<h3></h3>
<table class='table'>
    <thead>
    <tr>
    <th> Cantidad de Dinero invertido en el Dealer </th>
    <th> Cantidad de Ventas </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><?= cantidades_dinero(); ?></td>
    <td><?= cantidades_ventas(); ?></td>
    </tr>
    </tbody>

</table>
