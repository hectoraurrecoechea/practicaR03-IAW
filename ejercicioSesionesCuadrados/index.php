<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta data-theme="light">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuadrados aleatorios</title>
    <style>
        .color{
        width: calc(11% - 20px);
        height: 100px;
            display: inline-block;

        }
        body{
            margin: 0;
            padding: 0;
        }
    </style>
    <!--<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">-->
</head>
<body>
<header>
    <form action="mas.php" name="mas" method="post"><button>Más</button></form>
    <form action="menos.php" name="menos" method="post"><button>Menos</button></form>
</header>
<main>

    <?php
    $cuadrados = 10;
    $cuadrados = $cuadrados + $_COOKIE["cuadrados"];
    for ($c=1; $c<=20; $c++){
        for ($f=1;$f<=20;$f++) {
            $color1 = rand(0, 255);
            $color2 = rand(0, 255);
            $color3 = rand(0, 255);
            echo "<article class='color' style='background-color: rgb($color1, $color2, $color3)'></article>";
        }
    }
    ?>
</main>
</body>
</html>