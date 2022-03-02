<?php
class Spettacolo{
    protected $film;
    protected $data;
    protected $ora;
    protected $durata;
    protected $sala;

    
    public function __construct($_film, $_data, $_ora, $_durata, $_sala){
        $this->film=$_film;
        $this->data = $_data;
        $this->ora = $_ora;
        $this->durata = $_durata;
        $this->sala = $_sala;

    }

    public function getFilm(){
        return $this->film;
    }
    public function getdata(){
        return $this->data;
    }
}