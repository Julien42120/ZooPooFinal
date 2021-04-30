<?php

class ZooManager {
    
  public function __construct($db)
    {
        $this->db = $db;
    }

    public function add(Zoo $zoo)
    {
      $q = $this->db->prepare('INSERT INTO Zoo ( name, NbrMaxEnclos) VALUES(:name, :NbrMaxEnclos)');
      
      $q->bindValue(':name', $zoo->getname());
      $q->bindValue(':NbrMaxEnclos', $zoo->getnbMaxEnclos());
      
      $q->execute();
      
      $zoo->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }

}