<?php plantilla::aplicar(); ?>

<table class = 'table'>
            <thead>
                <tr>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Accion</th>
                </tr>
            </thead>
            <tbody>
            <?php $rs = Vehiculos::listado_vehiculos(); 
            foreach ($rs as $vehiculo) {  
              $urlVender = base_url("main/vender_vehiculos/{$vehiculo->id}");  
            echo <<<klkwawwawa
            <tr>
            <td>{$vehiculo->matricula}</td>
            <td>{$vehiculo->marca}</td>
            <td>{$vehiculo->modelo}</td>
            <td>{$vehiculo->color}</td>
            <td>{$vehiculo->year}</td>
            <td>{$vehiculo->precio}</td>
            <td>
            <a href = '{$urlVender}' class = 'btn btn-primary'>Comprar</a>  
            </td>            
            </tr>                               
klkwawwawa;
            }
            ?>
            </tbody>
        </table>
