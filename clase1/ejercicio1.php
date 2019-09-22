<?php
    #comentario de una sola linea
    //comentario una sola linea
    /* 
    comentario de multiples lineas
    */
    //echo "<b>hola</b> mundo";

    //variables
   /*$txt = "hello world";
    echo $txt;
    echo "<br>";
    $x = 10;
    $y = 10.5;
    echo $x;
    echo "<br>";
    echo $y;
    //concatenar
    echo "<br>";
    echo "$txt class";*/
    //boolean
    /*$booleanTrue = true;
    $booleanFalse = false;
    echo "<br>";
    echo $booleanTrue;
    echo "<br>";
    echo $booleanFalse;
    var_dump($booleanTrue);
    echo "<br>";
    var_dump($booleanFalse);
    echo "<br>";
    //arrays
    $cars = array("volvo","bmw","toyota");
    var_dump($cars);
    echo $cars[1];
    echo "<br>";
    //$age = array("jimmy"=>"100", "ben"=>"40", "tiburcio"=>"19");
    $age = array("jimmy"=>array('test',100), "ben"=>"40", "tiburcio"=>"19");
    echo $age['jimmy'][1];
    echo "<br>";

    //inverir string
    echo strrev("Hello world!"); // outputs "!dlrow olleH"*/
    echo "<br>";
    $age = 15;
    if ($age > 18 && $age <30) {
        echo "adulto";
    }elseif ($age<18) {
        echo "menor";
    }else{
        echo "mayor";
    }

    //while 
    $a = 0;
    $txt = 'test';
    while (($a <= 10)&&($txt ==='test')) {
        echo $a."<br>";
        if ($a >= 5) {
            $txt = 'prueba';
        }
        $a++;
    }
    echo "while";

    //do while 
    do {
        echo "test $a <br>";
        $a++;
    } while ($a <= 10);
    echo "do while";

    //for & for each

    /*for ($i=0; $i <= 100; $i++) { 
        echo "$i <br>";
    }*/

    $colors = array("red","yellow","black");
    $colors = array_reverse($colors);

    foreach ($colors as $color) {
        echo "el color es $color <br>"; 
    }

    $age = array("jimmy"=>"100", "ben"=>"40", "tiburcio"=>"19");

    foreach ($age as $key => $value) {
        echo "$key tiene la edad de $value <br>";
    }

    function writesMsg($txt){
        echo "hello $txt";
    }

   //writesMsg('World');

?>

