<?php

class EnclosureManager {

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function add( Enclosure $enclosure, Zoo $zoo)
    {

      $q = $this->db->prepare('INSERT INTO Enclos( type, clean, surface, empty , Salinite , Deep , Height , summit , NbMaxAnimals, idZoo ) VALUES( :type, :clean, :surface, :empty, :Salinite , :Deep , :Height , :summit , :NbMaxAnimals , :idZoo)');
      
      $q->bindValue(':type', $enclosure->getType());
      $q->bindValue(':clean', $enclosure->getClean());
      $q->bindValue(':surface', $enclosure->getSurface());
      $q->bindValue(':empty', $enclosure->isEmpty());
      $q->bindValue(':Salinite', $enclosure->getSalinity());
      $q->bindValue(':Deep', $enclosure->getdeep());
      $q->bindValue(':Height', $enclosure->getHeight());
      $q->bindValue(':summit', $enclosure->isSummit());
      $q->bindValue(':NbMaxAnimals', $enclosure->getMax());
      $q->bindValue(':idZoo', intval($zoo->getId()));
      
      $q->execute();
      
      $enclosure->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }
}