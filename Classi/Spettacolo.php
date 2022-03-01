<?php
class Spettacolo{
    protected $film;
    protected $numero;
    protected $ora;
    protected $durata;
    protected $sala;

    
    public function __construct($_film, $_numero, $_ora, $_durata, $_sala){
        $this->film=$_film;
        $this->numero = $_numero;
        $this->ora = $_ora;
        $this->durata = $_durata;
        $this->sala = $_sala;

    }
}