<?php
require_once __DIR__ . './Classi/Sala.php';
require_once __DIR__ . './Classi/SalaImmersiva.php';
require_once __DIR__ . './Classi/Spettacolo.php';
require_once __DIR__ . './Classi/Film.php';

$sale = [
    new Sala ("Sala 1"," 310 persone", "Schermo 400mq" ),
    new Sala ("Sala 2", "300 persone"," Schermo 410mq" ),
    new Sala ("Sala 3", "450 persone", "Schermo 420mq" ),
    new SalaImmersiva ("Sala 4", "310 persone","Schermo 400mq" ,false,true,true,false ),
    new SalaImmersiva ("Sala 5", "310 persone", "Schermo 410mq",true,false,true,false),
    new SalaImmersiva ("Sala 6", "300 persone","Schermo 400mq",true,true,true,true),

   
];

$spettacoli = [
    new Spettacolo ($opera[1],"Spettacolo n. 3", "20.00", "112 min", $sale[1]),
    new Spettacolo ($opera[2],"Spettacolo n. 5", "10.00", "122 min", $sale[1]),
    new Spettacolo ($opera[1],"Spettacolo n. 6", "15.00", "130 min", $sale[1]),
    new Spettacolo ($opera[0],"Spettacolo n. 2", "18.00", "109 min", $sale[1]),
    new Spettacolo ($opera[5],"Spettacolo n. 1", "9.00", "142 min", $sale[1]),
    new Spettacolo ($opera[3],"Spettacolo n. 7", "17.00", "130 min", $sale[1]),
];

$opera = [
    new Film("The Lost Daughter","Olivia Colman ","Drammatico"),
    new Film(" The Power of the Dog" ,"Phil Burban", "Drammatico"),
    new Film(" L’événement" ,"Annie Ernaux", "Drammatico"),
    new Film(" Dune ","Paul Atreides", "Avventura"),
    new Film(" Tenet ","Christopher Nolan"," Azione/Thriller"),
    new Film(" Dunette" ,"Leyaska Polinova"," Avventura"),
];

var_dump($spettacoli[1]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    
</body>
</html>