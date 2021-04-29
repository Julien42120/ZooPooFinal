<?php

class AnimalManager {


  public function add(Animal $animal, Enclosure $enclosure)
  {
    $q = $this->db->prepare('INSERT INTO Animal(nameSpecies, sex, age, `weight`, size, sleep, hungry, sick, gestation, id_enclos) VALUES(:nameSpecies, :sex, :age, :`weight`, :size, :sleep, :hungry, :sick, :gestation, :id_enclos)');
    
    $q->bindValue(':nameSpecies', $animal->getnameSpecies());
    $q->bindValue(':sex', $animal->getsex());
    $q->bindValue(':age', $animal->getage());
    $q->bindValue(':weight', $animal->getweight());
    $q->bindValue(':size', $animal->getsize());
    $q->bindValue(':sleep', $animal->isSleep());
    $q->bindValue(':hungry', $animal->isHungry());
    $q->bindValue(':sick', $animal->isSick());
    $q->bindValue(':gestation', $animal->getGestation());
    $q->bindValue(':id_enclos', $enclosure->getId());
    
    $q->execute();
    
    $animal->hydrate([
      'id' => $this->db->lastInsertId()
    ]);
  }

}