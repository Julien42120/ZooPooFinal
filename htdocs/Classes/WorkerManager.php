<?php

class WorkerManager {

  public function __construct($db)
  {
      $this->db = $db;
  }

    public function add(Worker $worker, Zoo $zoo)
    {
      $q = $this->db->prepare('INSERT INTO Worker ( Name, Sex , Age , idZoo) VALUES(:Name, :Sex , :Age , :idZoo)');
      
      $q->bindValue(':Name', $worker->getname());
      $q->bindValue(':Sex', $worker->getSex());
      $q->bindValue(':Age', $worker->getAge());
      $q->bindValue(':idZoo', $zoo->getId());
      
      $q->execute();
      
      $worker->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }
  
}