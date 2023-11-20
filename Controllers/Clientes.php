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
    }
    public function index()
    {
        $data['title'] = 'Tu perfil';
        $this->views->getView('principal', "perfil", $data);
    }
    /*Registro de usuarios en formulario*/
    public function registroDirecto()
    {
        if (isset($_POST['nombre']) && isset($_POST['clave'])) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $token = md5($correo);
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $data = $this->model->registroDirecto($nombre, $correo, $hash, $token);

            if ($data > 0) {
                $mensaje = array('msg' => 'Registrado correctamente', 'icono' => 'success' , 'token'=> $token);
            } else {
                $mensaje = array('msg' => 'Error al registrarse', 'icono' => 'error');
            }
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

    /* Envio de Correo a usuario para validar*/
    public function enviarCorreo()
    {
        if (isset($POST['correo']) && isset($POST['token'])) {
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
                $mail->isSMTP();                                          
                $mail->Host       = HOST_SMTP;                  
                $mail->SMTPAuth   = true;                                  
                $mail->Username   = USER_SMTP;                     
                $mail->Password   = PASS_SMTP;                           
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
                $mail->Port       = PUERTO_SMTP;                                    
    
                //Recipients
                $mail->setFrom('denisse.ap06@gmail.com', TITLE);
                $mail->addAddress($POST['correo']);     
    
                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Mensaje desde la: ' . TITLE;
                $mail->Body    = 'Para verificar tu correo en nuestra tienda <a href="'.BASE_URL.'clientes/verificarCorreo/'.($POST['token']).'">CLIC AQUÍ</a>';
                $mail->AltBody = 'Gracias por su preferencia';
    
                $mail->send();
                echo 'CORREO ENVIADO';
            } catch (Exception $e) {
                echo "Error al enviar correo: {$mail->ErrorInfo}";
            }
        } else {
            echo 'error fatal';
        }
        
    }
    public function verificarCorreo($token)
    {
        print_r($token);
    }
}
