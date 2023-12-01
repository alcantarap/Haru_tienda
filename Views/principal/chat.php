

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
        <h2>Bienvenido <span>usuario</span></h2>
        <div class="msg">
            <p>
                <span>Usuario:</span>
                Mensaje..............
            </p>
            <p class="sender">
                <span>Usuario:</span>
                Mensaje..............
            </p>
        </div>
        <div class="input_msg">
            <input type="text" placeholder="Escribe un mensaje...">
            <button>Enviar</button>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="<?php echo BASE_URL . 'principal/login_chat'; ?>" class="btn btn-dark" type="button">Adoptame</a>
            </div>
        </div>
    </div>

</body>

</html>

<?php
