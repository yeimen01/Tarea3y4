<?php plantilla::aplicar(); ?>
<br><br>
<div class='text-center'>
    <h3>Editando los usuarios</h3>

    </div>
    <table class='table'>
    <thead>
        <tr>
            <th>Nombre de usuario</th>
            <th>Contraseña</th>
            <th>Editar</th>

        </tr>
    </thead>
    <tbody>
            <?php
            $rs = Usuario::listado_usuario();
            foreach($rs as $usuarios){
                $urlEditar = base_url("main/create_user/{$usuarios->id}");
                echo "
                <tr>
                <td>{$usuarios->username}</td>
                <td>{$usuarios->password}</td>
                <td>
                    <a href='$urlEditar' class='btn btn-warning'><i class='fa fa-edit'></i></a>
                    
                 </tr>";   
            }
            ?>


        </tbody>


    </table>