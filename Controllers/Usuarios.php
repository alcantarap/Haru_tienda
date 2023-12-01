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
   function registrar() 
   {
    if (isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['correo'])&& isset($_POST['clave'])) {
        if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['clave'])) {
            $respuesta = array('msg' => 'todos los campos son requeridos', 'icono' => 'warning');
        } else {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $data = $this->model->registrar($nombre, $apellido, $correo, $hash);
            if ($data > 0) {
                $respuesta = array('msg' => 'Usuario registrado', 'icono' => 'success');
            }else{
                $respuesta = array('msg' => 'Error al registrar', 'icono' => 'error');
            }
        }
        echo json_encode($respuesta);
    }
    die();
   }
}