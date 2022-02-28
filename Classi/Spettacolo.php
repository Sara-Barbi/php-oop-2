<?php
class Spettacolo{
    protected $numero;
    protected $ora;
    protected $durata;
    
    public function __costruct($_numero, $_ora, $_durata){
        $this->numero = $_numero;
        $this->ora = $_ora;
        $this->durata = $_durata;
    }
}