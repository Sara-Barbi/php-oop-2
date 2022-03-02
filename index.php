<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once __DIR__ . './Classi/Sala.php';
require_once __DIR__ . './Classi/SalaImmersiva.php';
require_once __DIR__ . './Classi/Film.php';
require_once __DIR__ . './Classi/Spettacolo.php';

$sale = [
    new Sala ("Sala 1", 320, "Schermo 400mq" ),
    new Sala ("Sala 2",300 ," Schermo 410mq" ),
    new Sala ("Sala 3",350 , "Schermo 420mq" ),
    new SalaImmersiva ("Sala 4", 370,"Schermo 400mq" ,false,true,true,false ),
    new SalaImmersiva ("Sala 5", 350, "Schermo 410mq",true,false,true,true),   
];

$opera = [
    new Film("The Lost Daughter","Olivia Colman ","Drammatico"),
    new Film(" The Power of the Dog" ,"Phil Burban", "Drammatico"),
    new Film(" L’événement" ,"Annie Ernaux", "Drammatico"),
    new Film(" Dune ","Paul Atreides", "Avventura"),
    new Film(" Tenet ","Christopher Nolan"," Azione/Thriller"),
    new Film(" Dunette" ,"Leyaska Polinova"," Avventura"),
];

$spettacoli = [
    new Spettacolo ($opera[1],"03/03/2021", "20.00", "112 min", $sale[1]),
    new Spettacolo ($opera[2],"05/03/2021", "10.00", "122 min", $sale[0]),
    new Spettacolo ($opera[1],"03/03/2021", "15.00", "130 min", $sale[0]),
    new Spettacolo ($opera[0],"02/06/2021", "18.00", "109 min", $sale[3]),
    new Spettacolo ($opera[5],"01/06/2021", "9.00", "142 min", $sale[2]),
    new Spettacolo ($opera[3],"07/06/2021", "17.00", "130 min", $sale[4]),
    new Spettacolo ($opera[0],"08/07/2021", "10.00", "109 min", $sale[4]),
    new Spettacolo ($opera[5],"09/08/2021", "15.00", "142 min", $sale[1]),
    new Spettacolo ($opera[3],"01/09/2021", "17.00", "130 min", $sale[2]),
];

// 1 -> Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
var_dump($sale);

// 2 -> Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
$sum=0;
    foreach($sale as $key => $element){
        $sum += $element -> getPosti();
    }
var_dump($sum);

//Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
$count = 0;
$today = "03/03/2021";
$movie = $opera[1];

foreach($spettacoli as $key => $spettacolo){
    if(($today==$spettacolo->getData()) && ($movie==$spettacolo->getFilm())){
        $count++;
    }
}
var_dump($count);

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
    <h6></h6>
    
</body>
</html>