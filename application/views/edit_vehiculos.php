<?php plantilla::aplicar(); ?>
<br><br>
<div class='text-center'>
    <h3>Editando los usuarios</h3>

    </div>
    <table class='table'>
    <thead>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Año</th>
            <th>precio</th>
            <th>editar</th>

        </tr>
    </thead>
    <tbody>
            <?php
            $rs = vehiculos::listado_vehiculos();
            foreach($rs as $vehiculos){
                $urlEditar = base_url("main/editando_vehiculos/{$vehiculos->id}");
                echo "
                <tr>
                <td>{$vehiculos->matricula}</td>
                <td>{$vehiculos->marca}</td>
                <td>{$vehiculos->modelo}</td>
                <td>{$vehiculos->color}</td>
                <td>{$vehiculos->year}</td>
                <td>{$vehiculos->precio}</td>
                <td>
                    <a href='$urlEditar' class='btn btn-warning'><i class='fa fa-edit'></i></a>
                    
                 </tr>";   
            }
            ?>


        </tbody>


    </table>