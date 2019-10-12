<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $database = "flores";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["user"]) && !empty($_POST["email"])) {
            $user_2 = $_POST["user"];
            $email = $_POST["email"];
            $password_1 = $_POST["password_1"];

            $conn = new mysqli($server, $user, $password, $database);
            if ($conn->connect_error) {
                die('connection error'.$conn->connect_error);
            }

            $sqlInsert = "INSERT INTO usuarios(user, email, password_1) VALUES ('$user_2', '$email', '$password_1')";

            $result = $conn->query($sqlInsert);
            if ($result>0) {
                echo "<script type=\"text/javascript\">window.alert('registro exitoso!')</script>";
                header('refresh:1;index.php');
            }else{
                echo "fallo: ".mysqli_error($conn);
            }
            //$conn->close;
            mysqli_close($conn);
        }
    }
?>