<?php

class BirdCage extends Enclosure {

    protected int $height;
    protected bool $summit = false;

    /* CONSTRUCT */

    public function __construct($type, $surface, $max, $height) {
        parent::__construct($type, $surface, $max);
        $this->height = $height;
    }
    
    /* RETURN INT */

    public function getHeight () :int {
        return $this->height;
    }

    public function setHeight ($height) :void {
        $this->height = $height;
    }

    /* RETURN BOOL */

    public function isSummit () :int {
        return $this->summit;
    }

    public function setsummit ($summit) {
        $this->summit = $summit;
    }

    // public function add(Eagle $animal){
    //     array_push($this->animalsEnclos, $animal);
    // }

}