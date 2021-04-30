<?php

abstract class Enclosure {

    protected string $type;
    protected string $clean = 'propre';
    protected int $surface;
    protected int $max;
    protected bool $empty = true;
    protected $id;
    protected $height= null;
    protected $summit = null;
    protected $deep = null;
    protected $salinity = null;
    protected int $idZoo;
    protected  $animalEnclos;
    protected int $NbrAnimal = 0;

    /* CONSTRUCT */

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function getId() {
        return $this->id;
    }

    public function setId ($id){
        $this->id = $id;
    }

    public function getIdZoo (){
        return $this->idZoo;
    }

    public function setIdZoo ($idZoo){
        $this->idZoo = $idZoo;
    }

    public function getAnimalEnclos (){
        return $this->animalEnclos;
    }

    public function setAnimalEnclos ($animalEnclos){
        $this->animalEnclos = $animalEnclos;
    }

    /* HYDRATE */

    public function hydrate($donnees){
        foreach ($donnees as $key =>$value) {
        
            $method = 'set'.ucfirst($key);
        
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
        }
    }


    /* GETTERS & SETTERS */

    /* RETURN STRING */
    
    public function getType (){
        return $this->type;
    }

    public function setType ($type){
        $this->type = $type;
    }

    public function getClean(){
        return $this->clean;
    }

    public function setClean($clean){
        $this->clean = $clean;
    }

    /* RETURN INT */

    public function getSurface(){
        return $this->surface;
    }

    public function setSurface($surface){
        $this->surface = $surface;
    }


    public function getMax(){
        return $this->max;
    }

    public function setMax($max){
        $this->max = $max;
    }

    /* RETURN BOOL */

    public function isEmpty(){
        return $this->empty;
    }

    public function setEmpty($empty){
        $this->empty = $empty;
    }

    /* CARACTERISTIQUES DE L'ENCLOS */

    public function features() {

        echo '<b>Type of enclosure :</b>'.$this->getType().'<br>';
        echo '<b>Surface :</b>'.$this->getSurface().'<br>';
        echo '<b>Cleanliness :</b>'.$this->getClean().'<br>';
        // echo $this->isEmpty().'<br>';
        echo '<b>Number max of animals :</b>'.$this->getMax().'<br>';
    }


    public function clean(){
        if ($this->isEmpty() && $this->getClean() == 'dirty') {
            $this->setEmpty(false);
            $this->setClean('clean');
        }
    }



    // Aqua class 
    public function getDeep (){
        if($this->deep){
            return $this->salinity;
        } else {
            return null;
        }
    }

    public function setDeep ($deep) {
        $this->deep = $deep;
    }

    public function getSalinity (){
        if ($this->salinity){
            return $this->salinity;
            }   
            else {
                return null;
            }
    }

    public function setSalinity ($salinity) {
        $this->salinity = $salinity;
    }

    // BirdCage class 
    /* RETURN INT */

    public function getHeight () {
        return $this->height;
    }

    public function setHeight ($height) :void {
        $this->height = $height;
    }

    /* RETURN BOOL */

    public function isSummit () {
        return $this->summit;
    }

    public function setsummit ($summit) {
        $this->summit = $summit;
    }
}