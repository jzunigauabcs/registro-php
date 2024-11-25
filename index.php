<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>Iniciar sesión</title>
    </head>
    <body>
        <main>
            <div class="login">
                <form action="login.php" class="login-form" method="POST">
                    <h1 class="texto-centrado">Iniciar sesión</h1>
                    <div class="fila">
                        <label for="username">Nombre de usuario</label>
                        <input id="username" class="form-control" type="text" name="username" autocomplete="off">
                    </div>
                    <div class="fila">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="fila texto-centrado">
                        <a href="register_form.php" class="link">Crear cuenta</a>
                    </div>
                    <div class="fila texto-centrado">
                        <button class="btn" id="btnLogin">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
