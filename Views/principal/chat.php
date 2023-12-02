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
            <h2>Bienvenido <span><?php echo $_SESSION["usuario"]; ?></span>
            <a class="nav-link" href="<?php echo BASE_URL . 'principal/tienda'; ?>">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
            </a></h2>
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