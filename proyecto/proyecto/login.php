<?php
    ob_start();
    include('mylinks.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <link rel="icon" type="image/ico" href="../proyecto/img/icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../proyecto/estilos.css">
    <link rel="stylesheet" href="../proyecto/estilos2.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body class="fondo">
<nav class="navbar navbar-expand-lg navbar-light">
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

    <div class="container sesion">
        <h1>iniciar sesion</h1>
        <br>
        <form action="login.php" method="post">
        <label>correo: </label>  <input type="email" name="email" id="">
        <br><br>
        <label>password: </label>   <input type="password_1" name="password_1" id="">
        <br><br>
        <input type="submit" name="submit"  value="login">
        <br><br>
        <br>
        </form>
        <img class="flores-2" src="../proyecto/img/flor2.jpg" alt="">
    </div>

    <?php
        require_once('../proyecto/connect_tomy_sql.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['password_1'])) {
                $email = $_POST['email'];
                $password_1 = $_POST['password_1'];
            }
            
            $sqlSelect = "SELECT * FROM flores WHERE email = '$email' AND password_1 ='$password_1'";

            $result = $conn->query($sqlSelect);

            if($result->num_rows>0){
                $info_usuario = $result->fetch_assoc();
                session_start();
                $_SESSION['user'] = $info_usuario['user'];
                $_SESSION['email'] = $info_usuario['email'];
                //$_SESSION['id'] = $info_usuario['id'];
                echo "<script type=\"text/javascript\">window.alert('bienvenido!')</script>";
                header('refresh:2;index.php');
            }else{
                echo "<script type=\"text/javascript\">window.alert('loggeado incorrecto!')</script>";
            }
        }
    ?>

</body>
</html>
<?php
    ob_end_flush();
?>