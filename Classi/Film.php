<?php
class Film{
    protected $titolo;
    protected $durata;
    protected $protagonista;
    protected $tipologia;
    
    public function __costruct($_numero, $_posti, $_file){
        $this->titolo = $_numero;
        $this->durata = $_posti;
        $this->protagonista = $_protagonista;
        $this->tipologia = $_schermo;
    }
}