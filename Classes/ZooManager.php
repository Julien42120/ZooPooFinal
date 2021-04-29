<?php

class ZooManager {
    
    public function add(Zoo $zoo)
  {
    $q = $this->db->prepare('INSERT INTO DbZoo(`name`, nbMaxEnclos) VALUES(:name, :nbMaxEnclos)');
    
    $q->bindValue(':name', $zoo->getname());
    $q->bindValue(':nbMaxEnclos', $zoo->getNbMaxEnclos());
    
    $q->execute();
    
    $zoo->hydrate([
      'id' => $this->db->lastInsertId()
    ]);
  }

}