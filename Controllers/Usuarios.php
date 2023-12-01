<?php
class Usuarios extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Usuarios';
        $this->views->getView('admin/usuarios', "index", $data);
    }
   function listar() 
   {
    $data = $this->model->getUsuarios();
    echo json_encode($data);
    die();
   }
}