<?php
include('mylinks.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyecto</title>
    <link rel="icon" type="image/ico" href="../proyecto/img/icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../proyecto/estilos.css">
    <link rel="stylesheet" href="../proyecto/estilos2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="main.js"></script>
</head>
<body class="fondo">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <img src="../proyecto/img/icon.ico" alt="">
    <a class="navbar-brand" href="#">Flores Gomez</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo $linkhome; ?>">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $linkcuenta; ?>">Unete</a>
        </li>
        <a href="<?php echo $linklogin; ?>" class="btn boton">Login</a>
        </ul>
    </div>
    </nav>
    <br><br>
    <img class="flores" src="../proyecto/img/flor.jpg" alt="">
    <br><br><br>
    <div class="texto">
        <h1 class="animated pulse delay-1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit totam cumque nam accusamus, fugiat expedita quam cum molestias possimus maxime, alias nulla veritatis distinctio nisi reiciendis suscipit! Aspernatur, doloremque.</h1>
    </div>
    <br>
    <img class="flores" src="../proyecto/img/flor4.jpg" alt="">
    <br><br><br><br>
</body>
</html>