<?php
//session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["celular"])) {
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat de Adopción</title>
        <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/chat.css'; ?>">
    </head>

    <body>
        <h1>Chat de Haru Store</h1>
        <div class="chat">
            <h2>Bienvenido <span><?php echo $_SESSION["usuario"]; ?></span></h2>
            <div class="msg">

            </div>
            <div class="input_msg">
                <input type="text" placeholder="Escribe un mensaje..." id="input_msg">

                <button onclick="update()">Enviar</button>
            </div>
        </div>

    </body>

    <script src="<?php echo BASE_URL; ?>assets/js/chat.js"></script>

    </html>

<?php
} else {

    header("location: " . BASE_URL . "principal/login_chat");
    exit();
}
?>