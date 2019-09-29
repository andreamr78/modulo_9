<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulario de vectores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        if (isset($_POST['vec'])) {
            var_dump($_POST['vec']);
        }
    ?>
    <form action="ex1.php" method="POST">
    <?php
    // $n =8;
    for ($i=0 ; $i < 8; $i++ ) { 
        echo"<input type= 'text' name='vec[]' size='15'>  <br> <br>";
    }
    ?>
    <input type="submit" names="submit" value="enviar">
    </form>
</body>
</html>