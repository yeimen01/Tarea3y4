<?php 
if($_POST){

    $vehiculos = $_POST;
    vehiculos::guardar($vehiculos);
}

plantilla::aplicar(); ?>

<div class='container'>
    <br>
    <h3>Ingresando vehiculo</h3>
    <br>
        <form action="uploadPic" method="post" enctype='multipart/form-data'>
            <h5><?= asgInput('matricula', 'Matricula',['type'=>'text', 'placeholder'=>'Ingrese su matricula.','required'=>'required']); ?></h5>
        
            <h5><?= asgInput('marca', 'Marca del vehiculo',['type'=>'text', 'placeholder'=>'Honda, Hyundai, Volvo, Toyota, Nissan, Ford, Fiat, Mazda, Mitsubishi ','required'=>'required']); ?></h5>
           
            <h5><?= asgInput('modelo', 'Modelo del vehiculo',['type'=>'text', 'placeholder'=>'Ingrese el modelo del vehiculo','required'=>'required']); ?></h5>
        
            <h5><?= asgInput('color', 'Color',['type'=>'text', 'placeholder'=>'Ingrese el color del vehiculo','required'=>'required']); ?></h5>
            
            <h5><?= asgInput('year', 'Año',['type'=>'number', 'placeholder'=>'Ingrese el año del vehiculo','required'=>'required']); ?></h5>
            
            <h5><?= asgInput('precio', 'Precio',['type'=>'number', 'placeholder'=>'Ingrese el precio del vehiculo','required'=>'required']); ?></h5>
            <br>
            <?php echo form_open_multipart('main/uploadpic'); ?>

            <?php echo form_upload(['name'=>'userfile', 'value'=>'Save']); ?>

                <?php echo form_error('userfile', '<div class="text-danger">', '</div>'); ?>
    
                <?php echo form_submit(['name'=>'img', 'value'=>'Guardar Vehiculo']); ?>
            </form>
               
            <?php echo form_close(); ?>

        
</div>
