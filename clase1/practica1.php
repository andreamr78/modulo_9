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
    if (isset($_POST ['a'])&& isset($_POST['b'])) {
        $x = $_POST['a'];
        $y = $_POST['b'];
    }
    
    if (isset($_POST['suma'])) {
        echo $x+$y;
    }

    if (isset($_POST['resta'])) {
        echo $x-$y;
    }

    if (isset($_POST['mult'])) {
        echo $x*$y;
    }

    if (isset($_POST['divi'])) {
        echo $x/$y;
    }
?>
<form action="<?php $_PHP_SELF ?>" method="post">
    a: <input type="text" name="a">
    b: <input type="text" name="b">
    <input type="submit" value="suma" name="suma">
    <input type="submit" value="resta" name="resta">
    <input type="submit" value="mult" name="mult">
    <input type="submit" value="div" name="divi">
    </form>
</body>
</html>