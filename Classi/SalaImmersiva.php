<?php
class SalaImmersiva extends Sala{
    private $fumo;
    protected $vapore;
    protected $acqua;
    protected $scosse;


    public function __costruct($_numero, $_posti,$_schermo, $_fumo = false, $_vapore = false, $_acqua = false, $_scosse = false){
        parent::__construct($_numero, $_posti,$_schermo);        //per evitare di scrivere :
        $this->fumo = $_fumo;                                  //    $this->numero = $_numero;
        $this->vapore = $_vapore;                              //    $this->posti = $_posti;                                
        $this->acqua = $_acqua;                                //    $this->file = $_file;
        $this->scosse = $_scosse;                              //    $this->schermo = $_schermo;  
                                                               //che si trova in Sale.php, questo percgè comunque per i film 4D dovrò specificare il numero sala, i posti , le file e lo schermo  
    }
    public function setFumo($_fumo){
        $this -> fumo = $_fumo;
    }
    public function getFumo($_fumo){
        return $this -> fumo ;
    }


    public function setVapore($_vapore){
        $this->vapore = $_vapore;   
    }    
    
    public function setAcqua($_acqua){
        $this->acqua = $_acqua;   
    }   
    
    public function setScosse($_scosse){
        $this->scosse = $_scosse;  
    }
}