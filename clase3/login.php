<?php
    ob_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>iniciar sesion</h1>
    <form action="login.php" method="post">
    <label>correo: </label><input type="email" name="email" id="">
    <label>password: </label><input type="password" name="password" id="">
    <input type="submit" name="submit" value="LOG IN">
    </form>

    <?php
        require_once('../clase3/connect_tomy_sql.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
            $sqlSelect = "SELECT * FROM user_table WHERE email = '$email' and password_1 ='$password'";
            $result = $conn->query($sqlSelect);
            if($result->num_rows > 0){
                $info_usuario = $result->fetch_assoc();
                session_start();
                $_SESSION['user'] = $info_usuario['user'];
                $_SESSION['email'] = $info_usuario['email'];
                $_SESSION['rol'] = $info_usuario['rol'];
                $_SESSION['id'] = $info_usuario['id'];
                echo "loggeado correctamente";
                header('refresh:2;login.php');
            }else{
                echo"loggeado incorrecto";
            }
        }
    ?>

</body>
</html>
<?php
    ob_end_flush();
?>