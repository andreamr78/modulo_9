
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXAMEN PRACTICO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <h1>BUSQUEDA:</h1>
    <form action="busqueda.php" method="post">
    username:
    <input type="text" name="username" id="">
    <br><br>
    <input type="submit" name="search" value="search">
    <br>
    </form>

    <table>
        <tr>
            <br>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>DIRECCION</th>
            <th>PAIS</th>
            <th>CIUDAD</th>
        </tr>
        <?php
        include('../examen/connect_sql.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["username"])) {
                $searchq = $_POST['username'];
                $sqlSelect = "SELECT * FROM final2 WHERE username LIKE '%$searchq%'";
                $result = $conn->query($sqlSelect);
                if($result->num_rows>0){
                    $row = $result->fetch_assoc();

                        echo"<tr>";
                        echo"<td>".$row['username']."</td>";
                        echo"<td>".$row['email']."</td>";
                        echo"<td>".$row['direccion']."</td>";
                        echo"<td>".$row['pais']."</td>";
                        echo"<td>".$row['ciudad']."</td>";
                        echo"</tr>"; 
                    }
                }else {
                    echo "NO INFO";
                }
                
                $conn->close();
            }   
        ?>
    </table>

</body>
</html>