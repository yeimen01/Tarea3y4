<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    //Ventanas principales: Index, inico, new_cliente, reportes, edit_vehiculos, edit_usuarios

    public function index()
    {
        if(isset($_POST['password'])){
            $this->load->model('usuario_model');
           if($this->usuario_model->login($_POST['username'], $_POST['password'])){

            redirect('main/inicio');
            
           }else{
            echo "<script>alert('La contraseña o usuario incorrectos');</script>";
            redirect('#bad-password','refresh');
           }
        }
        $this->load->view('login');
    }

    public function inicio()
    {
        $this->load->view('inicio');
    }

    public function new_cliente()
    {
        $this->load->view('new_cliente');
    }

    public function reportes()
    {
        $this->load->view('reportes');
    }

    public function edit_vehiculos()
    {
        $this->load->view('edit_vehiculos');
    }

    public function edit_usuarios()
    {
        $this->load->view('edit_usuarios');
    }

    //Funciones de los vehiculos

    public function vender_vehiculo(){
        $this->load->view('vender_vehi');
    }

    public function vender_vehiculos($id = 0){
        $this->load->view('vender_vehiculo',['id'=> $id]);
    }

    public function editando_vehiculos($id=0){
        $this->load->view('editando_vehiculos',['id'=> $id]);
    }

    public function new_vehiculo()
    {
        $this->load->view('new_vehiculo');
    }

 
    //Cargar una foto 
    public function uploadPic(){

        $config = [
            'upload_path' => './uploads',
            'allowed_types' => 'gif|png|jpg|jppeg'
        ];
        $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        if($this->upload->do_upload()){
            $data = $this->input->post();
            $info = $this->upload->data();
            $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
            $data['img'] = $image_path;//img es el nombre del campo en la base de datos
            unset($data['submit']);
            $this->load->model('queries');//llamando a model
            if($this->queries->insertImage($data)){
                echo "<script>alert('El vehiculo ha sido creado')</script>";
                redirect('main/inicio','refresh');
                
            }else{
                echo 'error';
            }
        

        }else{
            
            redirect('','refresh');
            
        }

    }

    //Crear un usuario
    public function create_user($id=0){
        $this->load->view('create_user',['id'=> $id]);
    }

  

  

}

/* End of file Main.php */
