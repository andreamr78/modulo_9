<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ejemplo 1 insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
        </tr>
        <?php
        include('../clase3/connect_tomy_sql.php');
        $sqlSelect = "SELECT * FROM test_table";
        $result = $conn->query($sqlSelect);
        var_dump($result);
        if($result->num_rows>0){
            $test = $result->fetch_assoc();
            var_dump($test);
            while ($row = $result->fetch_assoc()) {
                //var_dump($row);
                echo"<tr>";
                echo"<td>".$row['nombre']."</td>";
                echo"<td>".$row['email']."</td>";
                echo"<td>".$row['id']."</td>";
                echo"</tr>";
            }
        }else {
            echo "NO INFO";
        }
        $conn->close();
    ?>
    </table>
</body>
</html>