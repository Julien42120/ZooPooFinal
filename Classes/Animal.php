<?php

abstract class Animal {

    protected string $nameSpecies;
    protected string $sex;
    protected int $age;
    protected int $weight;
    protected int $size;
    protected bool $sleep = false;
    protected bool $hangry = false;
    protected bool $sick = false;


    /* CONSTRUCT */

    public function __construct($nameSpecies, $sex, $age, $weight, $size){
        $this->nameSpecies = $nameSpecies;
        $this->sex = $sex;
        $this->age = $age;
        $this->weight = $weight;
        $this->size = $size;
    }

    /* GETTERS & SETTERS */

    /* RETURN STRING */

    public function getNameSpecies (){
        return $this->nameSpecies;
    }

    public function setNameSpecies ($nameSpecies){
        $this->nameSpecies = $nameSpecies;
    }

    public function getSex (){
        return $this->sex;
    }

    public function setSex($sex){
        $this->sex = $sex;
    }

    /* RETURN INT */

    public function getAge (){
        return $this->age;
    }

    public function setAge ($age){
        $this->age = $age;
    }

    public function getWeight (){
        return $this->weight;
    }

    public function setWeight ($weight){
        $this->weight = $weight;
    }

    public function getSize (){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    /* RETURN BOOL */

    public function isSleep (){
        return $this->sleep;
    }

    public function setSleep ($sleep){
        $this->sleep = $sleep;
    }

    public function isHangry (){
        return $this->hangry;
    }

    public function setHangry ($hangry){
        $this->hangry = $hangry;
    }

    public function isSick (){
        return $this->sick;
    }

    public function setSick($sick){
        $this->sick = $sick;
    }

    /* METHODES */

    public function eat() {
        if ($this->isHangry()){
            $this->setHangry(false);
        }
    }

    public function sleeping() {
        if ($this->isSleep()==false){
            $this->setsleep(true);
        }
    }

    public function wakeUp() {
        if ($this->isSleep()){
            $this->setsleep(false);
        }
    }

    public function care() {
        if ($this->isSick()){
            $this->setSick(false);
        }
    }

    public function sound() {
        echo 'HOOOUUUU';
    }

    /* CARACTERISTIQUES */

    public function features() {

        echo 'Name of the species: '.$this->getNameSpecies().'<br>';
        echo 'Age: '.$this->getAge().'<br>';
        echo 'Weight: '.$this->getWeight().'<br>';
        echo 'Size: '.$this->getSize().'<br>';
        // echo $this->isSleep().'<br>';
        // echo $this->isSick().'<br>';
        // echo $this->isHangry().'<br>';
    }

}