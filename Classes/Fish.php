<?php

class Fish extends Animal {

    protected int $gestation = 0;

    public function getGestation (){
        return $this->gestation;
    }

    public function setGestation ($gestation){
        $this->gestation = $gestation;
    }

    public function lay() {
        if ($this->gestation === 100 && $this->sex == 'female' ){
            echo  $this->getNameSpecies().' laid eggs';
            
            $this->setGestation(0);
        }
    }

    //***** DO TO : VOIR LE COMPTEUR GESTATION *****

    public function swim() {
        echo $this->getNameSpecies().' is swimming';
          
    }
}