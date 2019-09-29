<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulario con vectores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>cuantos valores desea sumar?</h1>
<form action="ex2.php" method="POST">
    <input type="number" name="test" id="">
    <input type="submit" name="submit" value="enviar">
</form>
<br>
<h1>resultado</h1>
<form action="ex2.php" method="POST">
    <?php
        if (isset($_POST['test'])) {
        $n= $_POST['test'];
        for ($i=0 ; $i < $n; $i++ ) {
        echo"<input type= 'number' name='vec[]' size='15'>  <br> <br>";
            }
        echo"<input type= 'submit' name='suma' value = 'suma'> ";
        }
    ?>
</form>
<?php
if (isset($_POST['vec'])) {
    $arreglo = $_POST['vec'];
    echo "resultado = ".array_sum($arreglo);
}
?> 
</body>
</html>