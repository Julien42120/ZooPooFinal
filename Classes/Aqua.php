<?php

class Aqua extends Enclosure {

    protected int $deep;
    protected int $salinity;

    /* CONSTRUCT */

    public function __construct($type, $surface, $max, $deep, $salinity) {
        parent::__construct($type, $surface, $max);
        $this->deep = $deep;
        $this->salinity = $salinity;
    }

    /* RETURN INT */

    public function getDeep () :int {
        return $this->deep;
    }

    public function setDeep ($deep) {
        $this->deep = $deep;
    }

    public function getSalinity () :int {
        return $this->salinity;
    }

    public function setSalinity ($salinity) {
        $this->salinity = $salinity;
    }

}