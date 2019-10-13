<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $database = "examen";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["username"]) && !empty($_POST["email"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password_1 = md5($_POST["password_1"]);
            $direccion = $_POST["direccion"];
            $pais = $_POST["pais"];
            $estado = $_POST["estado"];
            $ciudad = $_POST["ciudad"];

            var_dump($_POST);

            $conn = new mysqli($server, $user, $password, $database);
            if ($conn->connect_error) {
                die('connection error'.$conn->connect_error);
            }
            if ($password_1 !== md5($_POST["password_2"])) {
                die("error, revisa los passwords");
            }

            $sqlInsert = "INSERT INTO final2(username, email, password_1, direccion, pais, estado, ciudad ) VALUES ('$username', 
            '$email','$password_1', '$direccion', '$pais', '$estado', '$ciudad')";

            $result = $conn->query($sqlInsert);
            if ($result>0) {
                echo "registro exitoso";
            }else{
                echo "fallo: ".mysqli_error($conn);
            }
            //$conn->close;
            mysqli_close($conn);
        }
    }
?>