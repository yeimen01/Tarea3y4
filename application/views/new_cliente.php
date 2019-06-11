<?php 

if($_POST){
    $clientes = $_POST;
    clientes::guardar($clientes);
    redirect('main/inicio','refresh');   
}

plantilla::aplicar(); ?>

<div class='container'>
    <br>
    <h3>Ingresando cliente</h3>
    <br>
        <form action="" method="post">
        <h5><?= asgInput('cedula', 'Cedula',['type'=>'number', 'placeholder'=>'Ingrese su cedula.','required'=>'required']); ?></h5>
      
        <h5><?= asgInput('nombre', 'Nombre',['type'=>'text', 'placeholder'=>'Ingrese su nombre','required'=>'required']); ?></h5>
       
        <h5><?= asgInput('apellido', 'Apellido',['type'=>'text', 'placeholder'=>'Ingrese su apellido','required'=>'required']); ?></h5>
        
        <h5><?= asgInput('telefono', 'Telefono',['type'=>'number', 'placeholder'=>'Ingrese su telefono','required'=>'required']); ?></h5>
        
        <h5><?= asgInput('email', 'Correo electronico',['type'=>'email', 'placeholder'=>'Ingrese su correo electronico','required'=>'required']); ?></h5>
       
        <div class='text-center'>
            <Button class='btn btn-primary' type='submit' value='Ingresar'>
                <i class='fa fa-save'></i> Crear cliente</Button>
        </div>
        </form>
</div>