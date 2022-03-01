<?php
class Sala{
    private $numero;
    protected $posti;
    protected $schermo;
    protected $addetto;
    
    public function __costruct($_numero, $_posti, $_schermo){
        $this->numero = $_numero;
        $this->posti = $_posti;
        $this->schermo = $_schermo;
        $this->addetto = $_addetto;
    }
    public function setNumero($_numero){
        $this -> numero = $_numero;
    }
    public function getNumero(){
        return $this -> numero;
    }

    public function setPosti($_posti){
        $this->posti = $_posti;   
    }    
    
    public function setSchermo($_schermo){
        $this->schermo = $_schermo;   
    }   
    
    public function setAddetto($_addetto){
        $this->addetto = $_addetto; 
    }

}