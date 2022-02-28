<?php
require_once __DIR__ . './Classi/Sala.php';
require_once __DIR__ . './Classi/SalaImmersiva.php';
require_once __DIR__ . './Classi/Spettacolo.php';
require_once __DIR__ . './Classi/Film.php';

$sale = [
    new Sala ("1"," 310 persone", "400mq" ),
    new Sala ("2", "300 persone"," 410mq" ),
    new Sala ("3", "450 persone", "420mq" ),
    new SalaImmersiva ("4", "310 persone","400mq" ,false,true,true,false ),
    new SalaImmersiva ("5", "310 persone", "410mq",true,false,true,false),
    new SalaImmersiva ("6", "300 persone","400mq",true,true,true,true),

   
];

$spettacoli = [

];

$opere = [
   new Film("The Lost Daughter,Olivia Colman , Drammatico"),
   new Film(" The Power of the Dog ,Phil Burbank, Drammatico"),
   new Film(" L’événement ,Annie Ernaux, Drammatico"),
   new Film(" Dune ,Paul Atreides, Avventura"),
   new Film(" Tenet ,Christopher Nolan, Azione/Thriller"),
   new Film(" Dunette ,Leyaska Polinova, Avventura"),
];

