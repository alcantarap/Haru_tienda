
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
class Clientes extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        //session_destroy();
    }
    public function index()
    {
        if (empty($_SESSION['correoCliente'])) {
            header('Location: ' . BASE_URL);
        }
        $data['perfil'] = 'si';
        $data['title'] = 'Tu perfil';
        $data['verificar'] = $this->model->getVerificar($_SESSION['correoCliente']);
        $this->views->getView('principal', "perfil", $data);
    }

    /*Registro de usuarios en formulario*/
    public function registroDirecto()
    {
        if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['clave'])) {
            if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['clave'])) {
                $mensaje = array('msg' => 'TODOS LOS CAMPOS SON REQUERIDOS', 'icono' => 'warning');
            } else {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $clave = $_POST['clave'];
                $verificar = $this->model->getVerificar($correo);
                if (empty($verificar)) {
                    $token = md5($correo);
                    $hash = password_hash($clave, PASSWORD_DEFAULT);
                    $data = $this->model->registroDirecto($nombre, $correo, $hash, $token);
                    if ($data > 0) {
                        $_SESSION['correoCliente'] = $correo;
                        $_SESSION['nombreCliente'] = $nombre;
                        $mensaje = array('msg' => 'Registrado correctamente', 'icono' => 'success', 'token' => $token);
                    } else {
                        $mensaje = array('msg' => 'Error al registrarse', 'icono' => 'error');
                    }
                } else {
                    $mensaje = array('msg' => 'Ya tienes una cuenta registrada', 'icono' => 'warning');
                }
            }
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }



    /* Envio de Correo a usuario para validar*/
    public function enviarCorreo()
    {
        if (isset($_POST['correo']) && isset($_POST['token'])) {
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = HOST_SMTP;
                $mail->SMTPAuth   = true;
                $mail->Username   = USER_SMTP;
                $mail->Password   = PASS_SMTP;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = PUERTO_SMTP;

                //Recipients
                $mail->setFrom('denisse.ap06@gmail.com', TITLE);
                $mail->addAddress($_POST['correo']);

                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Mensaje desde la: ' . TITLE;
                $mail->Body    = 'Para verificar tu correo en nuestra tienda has <a href="' . BASE_URL . 'clientes/verificarCorreo/' . ($_POST['token']) . '">CLIC AQUÍ</a>';
                $mail->AltBody = 'Gracias por su preferencia';

                //Envio de correo - MENSAJE
                $mail->send();
                $mensaje = array('msg' => 'Correo enviado, Revisa tu bandeja de entrada', 'icono' => 'success');
            } catch (Exception $e) {
                $mensaje = array('msg' => 'ERROR al enviar Correo: ' . $mail->ErrorInfo, 'icono' => 'error');
            }
        } else {
            $mensaje = array('msg' => 'Error Fatal', 'icono' => 'error');
        }
        echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
        die();
    }

    //Verificar correo 
    public function verificarCorreo($token)
    {
        $verificar = $this->model->getToken($token);
        if (!empty($verificar)) {
            $data = $this->model->actualizarVerify($verificar['id']);
            header('Location: ' . BASE_URL . 'clientes');
        }
    }

    //Login Directo 
    public function loginDirecto()
    {
        if (isset($_POST['correoLogin']) && isset($_POST['claveLogin'])) {
            if (empty($_POST['correoLogin']) || empty($_POST['claveLogin'])) {
                $mensaje = array('msg' => 'TODOS LOS CAMPOS SON REQUERIDOS', 'icono' => 'warning');
            } else {
                $correo = $_POST['correoLogin'];
                $clave = $_POST['claveLogin'];
                $verificar = $this->model->getVerificar($correo);
                if (!empty($verificar)) {
                    if (password_verify($clave, $verificar['clave'])) {
                        $_SESSION['correoCliente'] = $verificar['correo'];
                        $_SESSION['nombreCliente'] = $verificar['nombre'];
                        $mensaje = array('msg' => 'Okey', 'icono' => 'success');
                    } else {
                        $mensaje = array('msg' => 'Error al ingresar, CONTRASEÑA INCORRECTA', 'icono' => 'error');
                    }
                } else {
                    $mensaje = array('msg' => 'Error al ingresar, EL CORREO NO EXISTE', 'icono' => 'warning');
                }
            }
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
    //registro pedido
    public function registrarPedido()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $pedidos = $json['pedidos'];
        $productos = $json['productos'];
        if (is_array($pedidos) && is_array($productos)) {
            $id_transaccion = $pedidos['id'];
            $monto = $pedidos['purchase_units'][0]['amount']['value'];
            $estado = $pedidos['status'];
            $fecha = date('Y-m-d H:i:s');
            $email = $pedidos['payer']['email_address'];
            $nombre = $pedidos['payer']['name']['given_name'];
            $apellido = $pedidos['payer']['name']['surname'];
            $direccion = $pedidos['purchase_units'][0]['shipping']['address']['address_line_1'];
            $comuna = $pedidos['purchase_units'][0]['shipping']['address']['admin_area_2'];
            $email_user = $_SESSION['correoCliente'];
            $data = $this->model->registrarPedido($id_transaccion, $monto, $estado, $fecha, $email, $nombre, $apellido, 
                                        $direccion, $comuna, $email_user);
            if ($data > 0) {
                foreach ($productos as $producto) {
                    $temp = $this->model->getProducto($producto['idProducto']);
                    $this->model->registrarDetalle($temp['nombre'], $temp['precio'], $producto['cantidad'], $data);
                }
                $mensaje = array('msg' => 'Pedido registrado', 'icono' => 'success');
            } else {
                $mensaje = array('msg' => 'Error al registrar pedido', 'icono' => 'error');
            }
            
        }else{
            $mensaje = array('msg' => 'Error con los datos', 'icono' => 'error');
        }
        echo json_encode($mensaje);
        die();
    }

    //listar productos pendientes
    public function listarPendientes()
    {
        $data = $this->model->getPedidos(1);
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['accion'] = '<div class="text-center"><button class="btn btn-primary" type="button" onclick="verPedido('.$data[$i]['id'].')"><i class="fas fa-eye"></i></button></div>';
        }
        echo json_encode($data);
        die();
    }

    public function verPedido($idPedido) 
    {
        $data ['productos'] = $this->model->verPedido($idPedido);
        $data['moneda'] = MONEDA;
        echo json_encode($data);
        die();
    }

    //Cerrar sesión
    public function salir()
    {
       session_destroy();
       header('Location: ' . BASE_URL);
    }
}


//sb-tzsq4328381933@personal.example.com
//PU^u6$3+
