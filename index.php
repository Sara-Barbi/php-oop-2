<?php
require_once __DIR__ . './Classi/Sala.php';
require_once __DIR__ . './Classi/SalaImmersiva.php';
require_once __DIR__ . './Classi/Spettacolo.php';
require_once __DIR__ . './Classi/Film.php';

$sale = [
    new Sala ("Sala 1"," 310 persone", "400mq" ),
    new Sala ("Sala 2", "300 persone"," 410mq" ),
    new Sala ("Sala 3", "450 persone", "420mq" ),
    new SalaImmersiva ("Sala 4", "310 persone","400mq" ,false,true,true,false ),
    new SalaImmersiva ("Sala 5", "310 persone", "410mq",true,false,true,false),
    new SalaImmersiva ("Sala 6", "300 persone","400mq",true,true,true,true),

   
];

$spettacoli = [
    new Spettacolo ("Spettacolo n. 3", 20.00, "112 min"),
    new Spettacolo ("Spettacolo n. 5", 10.00, "122 min"),
    new Spettacolo ("Spettacolo n. 6", 15.00, "130 min"),
    new Spettacolo ("Spettacolo n. 2", 18.00, "109 min"),
    new Spettacolo ("Spettacolo n. 1", 9.00, "142 min"),
    new Spettacolo ("Spettacolo n. 7", 17.00, "130 min"),


];

$opere = [
   new Film("The Lost Daughter","Olivia Colman ","Drammatico"),
   new Film(" The Power of the Dog" ,"Phil Burban", "Drammatico"),
   new Film(" L’événement" ,"Annie Ernaux", "Drammatico"),
   new Film(" Dune ","Paul Atreides", "Avventura"),
   new Film(" Tenet ","Christopher Nolan"," Azione/Thriller"),
   new Film(" Dunette" ,"Leyaska Polinova"," Avventura"),
];

