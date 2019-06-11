<?php login::aplicar(); ?>
<div class='container'>
    <div class='text-center' ><br><br><br><br><br><br>
        <form action="" method="post">
        <h4><?= asgInput('username', 'Usuario',['type'=>'text', 'placeholder'=>'Ingrese su usuario. Ej: soypopi123','required'=>'required']); ?></h4>
        <br>
        <h4><?= asgInput('password', 'Contraseña',['type'=>'password', 'placeholder'=>'','required'=>'required']); ?></h4>
        <Button class='btn btn-primary' type='submit' value='Ingresar'>Ingresar</Button>
        </form>
    </div>
</div>