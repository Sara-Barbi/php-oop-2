<?php
class Sala{
    protected $numero;
    protected $posti;
    protected $schermo;
    protected $addetto;
    
    public function __construct($_numero, $_posti, $_schermo){
        $this->numero = $_numero;
        $this->posti = $_posti;
        $this->schermo = $_schermo;
    }
    public function getInfoSala(){
        return "{$this->numero}<br>"."{$this->posti}<br>"."{$this->schermo}<br>"."{$this->id}";
    }
    public function getPosti(){
        return $this->posti;
    }
}