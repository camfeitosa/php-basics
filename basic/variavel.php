<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Var</title>
</head>
<body>
  <?php

    // Variaveis 'vazias'
    $string = "";
    $array = [];
    $obj = null;
    $floatNumber = 0;
    $boolean = false;

    $name = 'Camila Feitosa';
    echo $name;

    $number = 123;
    echo $number;

    $float = 2.234;
    var_dump($float) ;

    $bool = true;

    //Array
    $names = ['Dani', "Rafa", "Edu"];

    //Object
    // $object = new Car()

  ?>

  <p>Hi, my name is <?= $name; ?></p>
</body>
</html>