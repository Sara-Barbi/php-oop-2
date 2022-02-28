<?php
class Sala{
    protected $numero;
    protected $posti;
    protected $file;
    protected $addetto;
    protected $schermo;
    
    public function __costruct($_numero, $_posti, $_file){
        $this->numero = $_numero;
        $this->posti = $_posti;
        $this->file = $_file;
        $this->schermo = $_schermo;
    }
}