<?php 
    if(isset($_POST["nombre"]) && isset($_POST["celular"])){
        $nombre = $_POST["nombre"];
        $celular = $_POST["celular"];

        $q = "SELECT * FROM `users` WHERE name=$nombre && celular=$celular";

        if ($rq = mysqli_query($db, $q)){
            
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

        <h3>Nombre Usuario:</h3>
        <input type="text" placeholder="Nombre">

        <h3>Número Celular:</h3>
        <input type="text" placeholder="Número" min="+56911111111">

        <button>Login / Register</button>
    </div>
    </form>
</body>
</html>
