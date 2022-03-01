<?php
class Sala{
    protected $numero;
    protected $posti;
    protected $schermo;
    protected $addetto;
    
    public function __costruct($_numero, $_posti, $_schermo){
        $this->numero = $_numero;
        $this->posti = $_posti;
        $this->schermo = $_schermo;
        $this->addetto = $_addetto;

    }
}