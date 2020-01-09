<?php

require_once( __DIR__ . '/DAO.php');

class FlancerDAO extends DAO {

  public function selectAllFlancers(){
    $sql = "SELECT * FROM `flancers` ORDER BY `id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `flancers` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllJobs(){
    $sql = "SELECT * FROM `jobs` WHERE `skills`!= '/' ORDER BY `id` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectByJobId($id){
    $sql = "SELECT * FROM `jobs` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function filterByRecommendations(){
    $sql = "SELECT * FROM `flancers` ORDER BY `recommendations` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByLocation(){
    $sql = "SELECT * FROM `flancers` ORDER BY `location` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByPrice(){
    $sql = "SELECT * FROM `flancers` ORDER BY `pricelow` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createjob($data) {
    $sql = "INSERT INTO `jobs` (`jobname`, `description`, `price`, `duration`, `location`, `skills`) VALUES (:jobname, :description, :price, :duration, :location, :skills)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue("jobname", $data["jobname"]);
    $stmt->bindValue("description", $data["description"]);
    $stmt->bindValue("price", $data["price"]);
    $stmt->bindValue("duration", $data["duration"]);
    $stmt->bindValue("location", $data["location"]);
    $stmt->bindValue("skills", $data["skills"]);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectLastAddedJob(){
    $sql = "SELECT * FROM `jobs` ORDER BY `id` DESC LIMIT 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

    // job updaten in de database
    public function updateJob($data) {
        $sql = "UPDATE `jobs` SET `price` = :price, `duration` = :duration, `skills` = :skills, `location` = :location WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue("price", $data["price"]);
        $stmt->bindValue("duration", $data["duration"]);
        $stmt->bindValue("location", $data["location"]);
        $stmt->bindValue("skills", $data["skills"]);
        $stmt->bindValue(':id', $data['id']);
        $stmt->execute();
    }

    public function updateJobInfo($data) {
      $sql = "UPDATE `jobs` SET `jobname` = :jobname,`description` = :description, `price` = :price, `duration` = :duration, `skills` = :skills, `location` = :location WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue("jobname", $data['jobname']);
      $stmt->bindValue("description", $data["description"]);
      $stmt->bindValue("price", $data["price"]);
      $stmt->bindValue("duration", $data["duration"]);
      $stmt->bindValue("location", $data["location"]);
      $stmt->bindValue("skills", $data["skills"]);
      $stmt->bindValue(':id', $data['id']);
      $stmt->execute();
    }
  }
