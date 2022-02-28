<?php
class Film{
    protected $titolo;
    protected $protagonista;
    protected $tipologia;
    
    public function __costruct($_titolo, $protagonista, $_tipologia){
        $this->titolo = $_titolo;
        $this->protagonista = $_protagonista;
        $this->tipologia = $_tipologia;
    }
}