<?php

class Worker {

    protected string $name;
    protected string $sex;
    protected int $age;

    /* CONSTRUCT FUNCTION */

    public function __construct($name, $sex, $age){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    /* GETTERS & SETTERS */

    public function getName()
    {
        return $this->name;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge ($age)
    {
        $this->age = $age;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex ($sex)
    {
        $this->sex = $sex;
    }

    /* METHODES OF WORKER */

    public function inspectEnclos(Enclosure $enclosure) {
        $enclosure->animalsFeatures();
        $enclosure->features();
    }

    // public function feed() {
    //     if ($this->isSleep(false) {
    //        $this->isHangry(true);
    //        echo $this->name.' fed the animal !';
    //     }
    // }

    public function clean(){
        if ($this->isEmpty() && $this->getClean() == 'dirty') {
            $this->setEmpty(false);
            $this->setClean('clean');
           echo $this->name.' cleanned the enclosure !';
        }
    }

}