<?php
    if (isset($_POST["name"]) || isset($_POST["age"])) {
        echo "bienvenido POST: ".$_POST["name"]."<br>";
        echo "edad POST: ".$_POST["age"];
    }
?>

<?php
    if (isset($_GET["name"]) || isset($_GET["age"])) {
        echo "bienvenido GET: ".$_GET["name"]."<br>";
        echo "edad GET: ".$_GET["age"];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    echo "<h1>get</h1>";
    echo '<form action="example.php" method="GET">';
    ?>
    name: <input type="text" name="name">
    age: <input type="text" name="age">
    <input type="submit" value="Enviar">
    <?php
    echo "</form>";
    ?>
    <br>
    <form action="<?php $_PHP_SELF ?>" method="post">
    name: <input type="text" name="name">
    age: <input type="text" name="age">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>