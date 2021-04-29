<?php

class EnclosureManager {

    public function add( Enclosure $enclosure)
    {

      $q = $this->db->prepare('INSERT INTO Enclos(`type`, clean, surface, height, `empty`, animal_enclos, nb_max_animals, summit, animal_enclos, salinity, deep, id_zoo) VALUES(:`type`, :can, :surface, :`height`, :`empty`,  :nb_max_animals, :summit, :animal_enclos, :salinity, :deep, :id_zoo)');
      
      $q->bindValue(':type', $enclosure->getType());
      $q->bindValue(':clean', $enclosure->getClean());
      $q->bindValue(':surface', $enclosure->getSurface());
      $q->bindValue(':empty', $enclosure->isEmpty());
      $q->bindValue(':id', $enclosure->getId());
      $q->bindValue(':nb_max_animals', $enclosure->getMax());
      $q->bindValue(':summit', $enclosure->isSummit());
      $q->bindValue(':animal_enclos', $enclosure->getAnimalEnclos());
      $q->bindValue(':salinity', $enclosure->getSalinity());
      $q->bindValue(':deep', $enclosure->getdeep());
      $q->bindValue(':height', $enclosure->getHeight());
      $q->bindValue(':id_zoo', $enclosure->getIdZoo());
      
      $q->execute();
      
      $enclosure->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }
}