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

    public function setTitolo($_titolo){
        $this->titolo = $_titolo;
    }

    public function setProtagonista($_protagonista){
        $this->protagonista = $_protagonista;
    }    
    
    public function setTipologia($_tipologia){
        $this->tipologia = $_tipologia;
    }   
}

    
