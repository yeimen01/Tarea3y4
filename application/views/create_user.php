<?php plantilla::aplicar(); 

if($_POST){

    $usuarios= $_POST;
    Usuario::guardar($usuarios);
    redirect('main/inicio');


}



$usuarios = new stdClass;
$usuarios->id = '';
$usuarios->username = '';
$usuarios->password = '';

if(isset($id)){
    $rs = Usuario::persona_x_id($id);
    if(count($rs) > 0){
        //var_dump($rs); exit();
        $usuarios = $rs[0];

    }
}
?>


<div class='container'>
    <br>
    <h3>Editando el usuario</h3>
    <br>
        <form action="" method="post">
        <input type="hidden" name='id' value='<?= $usuarios->id ?>'/>
        <h5><?= asgInput('username', 'Nombre de usuario',['type'=>'text', 'placeholder'=>'','required'=>'required'], $usuarios->username); ?></h5>
        <h5><?= asgInput('password', 'Contraseña',['type'=>'text', 'placeholder'=>'','required'=>'required'], $usuarios->password); ?></h5>
        <div class='text-center'>
            <Button onclick="alert ('usuario guardado')" class='btn btn-primary' type='submit' value='Ingresar'>
                <i class='fa fa-save'></i> Guardar Usuario</Button>
        </div>
        </form>
</div>