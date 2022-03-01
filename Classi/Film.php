<?php
class Film{
    protected $titolo;
    protected $protagonista;
    protected $tipologia;
    
    public function __construct($_titolo, $_protagonista, $_tipologia){
        $this->titolo = $_titolo;
        $this->protagonista = $_protagonista;
        $this->tipologia = $_tipologia;
    }

    public function getInfoFilm(){
        return "{$this->titolo}<br>"."{$this->protagonista}<br>"."{$this->toipologia}<br>"."{$this->id}";
    }
}

    
