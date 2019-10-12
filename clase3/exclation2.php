<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $database = "test";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["user"]) && !empty($_POST["email"])) {
            $user = $_POST["user"];
            $email = $_POST["email"];
            $password_1 = $_POST["password_1"];
            $rol = $_POST["rol"];

            $conn = new mysqli($server, $user, $password, $database);
            if ($conn->connect_error) {
                die('connection error'.$conn->connect_error);
            }
            if ($password_1 !== ($_POST["password_2"])) {
                die("error, revisa los passwords");
            }

            $sqlInsert = "INSERT INTO user_table(user, email, password_1, rol) VALUES ('$user', '$email', '$password_1', '$rol')";

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