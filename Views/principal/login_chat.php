<?php 

include "db_chat.php";
if (session_status() === PHP_SESSION_NONE) {
    
    session_start();
}


if(isset($_POST["nombre"]) && isset($_POST["celular"])){
    $nombre = $_POST["nombre"];
    $celular = $_POST["celular"];

    $q ="SELECT * FROM `users` WHERE nombre='$nombre' && celular='$celular'";

    if ($rq = mysqli_query($db, $q)){
        if(mysqli_num_rows($rq)==1){

            $_SESSION["usuario"]=$nombre;
            $_SESSION["celular"]=$celular;
            header("location: " . BASE_URL . "principal/chat");
            
        }else{

            $q ="SELECT * FROM `users` WHERE celular='$celular'";
            if ($rq = mysqli_query($db, $q)){
                if(mysqli_num_rows($rq)==1){
                    echo "<script>alert($celular+' Este número ya esta ocupado')</script>";
                }else{
                    $q="INSERT INTO `users`(`nombre`,`celular`) VALUES ('$nombre','$celular')";
                    if ($rq = mysqli_query($db, $q)){
                        $q ="SELECT * FROM `users` WHERE name='$nombre' && celular='$celular'";
                        if ($rq = mysqli_query($db, $q)){
                            if(mysqli_num_rows($rq)==1){
                                
                                $_SESSION["usuario"]=$nombre;
                                $_SESSION["celular"]=$celular;
                                header("location: " . BASE_URL . "principal/chat");

                            }
                        }
                    }
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat de Adopción</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/login.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/chat.css'; ?>">
</head>
<body>
    <h1>Chat de Haru Store</h1>
    <div class="login">
    <h2>Inicio de Sesión</h2>
    <p>Bienvenido al chat de adopción de Haru Store, comunicate con los usuarios y adopta la mascota de tus sueños.</p>
    <form action="" method="post">

        <h3>Usuario:</h3>
        <input type="text" placeholder="Nombre" name="nombre">

        <h3>Celular:</h3>
        <input type="number" placeholder="Número" min="1111111" max="999999999999999" name="celular">

        <button>Login / Register</button>
    </div>
    </form>
</body>
</html>
