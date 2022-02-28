<?php
class SalaImmersiva extends Sala{
    use Effetti;

    public function __costruct($_numero, $_posti, $_file ,$_fumo = false, $_vapore = false, $_acqua = false, $_scosse = false){
        parent::__construct($_numero, $_posti, $_file);        //per evitare di scrivere :
        $this->fumo = $_fumo;                                  //    $this->numero = $_numero;
        $this->vapore = $_vapore;                              //    $this->posti = $_posti;                                
        $this->acqua = $_acqua;                                //    $this->file = $_file;
        $this->scosse = $_scosse;                              //    $this->schermo = $_schermo;  
                                                               //che si trova in Sale.php, questo percgè comunque per i film 4D dovrò specificare il numero sala, i posti , le file e lo schermo  
    }
}