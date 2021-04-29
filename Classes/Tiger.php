<?php

class Tiger extends Animal {
    
    protected int $gestation = 0;

    public function getGestation (){
        return $this->gestation;
    }

    public function setGestation ($gestation){
        $this->gestation = $gestation;
    }

    public function birth() {
        if ($this->gestation === 100 && $this->sex == 'female' ){
            echo  $this->getNameSpecies().' Gave birth';
            
            $this->setGestation(0);
        }
    }

    //***** DO TO : VOIR LE COMPTEUR GESTATION *****

    public function roam() {
        echo $this->getNameSpecies().' is roaming';
          
    }
}