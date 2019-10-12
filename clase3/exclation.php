<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $database = "test";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['name']) && !empty($_POST["email"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];

            $conn = new mysqli($server, $user, $password, $database);
            if ($conn->connect_error) {
                die('connection error'.$conn->connect_error);
            }

            $sqlInsert = "INSERT INTO test_table(nombre, email) VALUES ('$name', '$email')";

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