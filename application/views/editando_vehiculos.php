<?php plantilla::aplicar(); 

if($_POST){

    $vehiculos= $_POST;
    Vehiculos::guardar($vehiculos);
    redirect('main/inicio');

}

$vehiculos = new stdClass;
$vehiculos->id = '';
$vehiculos->matricula = '';
$vehiculos->marca = '';
$vehiculos->modelo = '';
$vehiculos->color = '';
$vehiculos->year = '';
$vehiculos->precio = '';
$vehiculos->img = '';

if(isset($id)){
    $rs = Vehiculos::vehiculo_x_id($id);
    if(count($rs) > 0){
        //var_dump($rs); exit();
        $vehiculos = $rs[0];

    }
}
?>


<div class='container'>
    <br>
    <h3>Editando el vehiculo</h3>
    <br>
        <form action="" method="post">
        <input type="hidden" name='id' value='<?= $vehiculos->id ?>'/>
        <h5><?= asgInput('marca', 'Marca del vehiculo',['type'=>'text', 'placeholder'=>'','required'=>'required'], $vehiculos->marca); ?></h5>
        <h5><?= asgInput('modelo', 'Modelo del vehiculo',['type'=>'text', 'placeholder'=>'','required'=>'required'], $vehiculos->modelo); ?></h5>
        <div class='text-center'>
            <Button onclick="alert ('Vehiculo guardado')" class='btn btn-primary' type='submit' value='Ingresar'>
                <i class='fa fa-save'></i> Guardar vehiculo</Button>
        </div>
        </form>
</div>