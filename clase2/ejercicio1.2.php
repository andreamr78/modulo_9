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
            $arreglo = $_POST['vec'];
            echo "opcion 1 = ".array_sum($arreglo);

            $suma = 0;
            foreach ($arreglo as $key) {
                $suma = $suma+$key;
                
            }
            echo"<br>";
            echo "opcion 2 =  ".$suma;
        }

        $suma = 0;
        for ($i=0; $i < count($arreglo); $i++) { 
            $suma += $arreglo[$i];
        }
        echo"<br>";
        echo "opcion 3 =  ".$suma;
    ?>
    <form action="ejercicio1.2.php" method="POST">
    <?php
    // $n =8;
    for ($i=0 ; $i < 8; $i++ ) { 
        echo"<input type= 'number'step='0.01' name='vec[]' size='15'>  <br> <br>";
    }
    ?>
    <input type="submit" names="submit" value="enviar">
    </form>
</body>
</html>