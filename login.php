<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/webfonts/style.css">
    <link rel="stylesheet" type="text/css" href="css/css/all.min.css">
    <link rel="shortcut icon" type="image/jpg" href="https://www.verfarma.com/images/blog/2015/noviembre/apothecary-159037_1280.jpg"/>
</head>
<body>
    <img class="wave" src="img/wave.png" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="img/bg.svg" alt="">
        </div>
        <div class="contenido-login">
            <form action="controlador/LoginController.php" method="post">
                <img src="img/logo.png" alt="">
                <h2>Farmacia</h2>
                <div class="input-div dni">
                    <div class="i">
                       <i class="fas fa-user" ></i>          
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input">
                    </div>
                </div>   
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input">
                    </div>
                </div>
                <a href="">Created Warpiece</a>
                <input type="submit" class="btn" value="iniciar Sesion">
            </form>
        </div>
    </div>  
</body>
<sript src="js/login.js"></script>

</html>