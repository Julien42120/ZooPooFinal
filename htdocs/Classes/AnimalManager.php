<?php

class AnimalManager {


  public function __construct($db)
  {
      $this->db = $db;
  }

  public function add(Animal $animal, Enclosure $enclosure)
  {
    $q = $this->db->prepare('INSERT INTO Animaux (nameSpecies, type ,  sex, Age, Weight, Size, Sleep, Hangry, Sick, gestation, idEnclos) VALUES(:nameSpecies, :type ,:sex, :Age, :Weight, :Size, :Sleep, :Hangry, :Sick, :gestation, :idEnclos)');
    
    $q->bindValue(':nameSpecies', $animal->getnameSpecies());
    $q->bindValue(':type', $animal->getType());
    $q->bindValue(':sex', $animal->getsex());
    $q->bindValue(':Age', $animal->getage());
    $q->bindValue(':Weight', $animal->getweight());
    $q->bindValue(':Size', $animal->getsize());
    $q->bindValue(':Sleep', (int)$animal->isSleep());
    $q->bindValue(':Hangry', (int)$animal->isHungry());
    $q->bindValue(':Sick', (int)$animal->isSick());
    $q->bindValue(':gestation', $animal->getGestation());
    $q->bindValue(':idEnclos', $enclosure->getId());
    
    $q->execute();
    
    $animal->hydrate([
      'id' => $this->db->lastInsertId()
    ]);
  }

}