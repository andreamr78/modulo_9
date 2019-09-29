<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ejercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Ingrese el titulo</h1>
<form action="ejercicio3.php" method="POST">
    <input type="text" name="titulo" id="titulo" value="">
<br>
<h1>arreglo</h1>
<?php
    // $n =8;
    for ($i=0 ; $i < 5; $i++ ) { 
        echo"<input type= 'text' name='vec[]' size='15'>  <br> <br>";
        }
?>
<input type="submit" names="submit" value="enviar">
<br>
<br>
<br>
<?php
    if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    echo "<h2>".$titulo."</h2>";
    }
?> 
<?php
    if (isset($_POST['vec'])) {
        $lista = $_POST['vec'];
        echo "<ol>";
        foreach ($lista as $key) {
            echo "<li>".$key."</li>";
        }
        echo "</ol>";
    }
?> 
<?php
    if (isset($_POST['vec'])) {
        $lista = $_POST['vec'];
       sort($lista);
        echo "<ol>";
        foreach ($lista as $key) {
            echo "<li>".$key. "</li>";
        }
        echo "</ol>";
    }
?> 


</form>
<br>
</body>
</html>