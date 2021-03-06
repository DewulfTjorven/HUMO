<?php

require_once( __DIR__ . '/DAO.php');

class ProductDAO extends DAO {

  public function selectAllProducts(){
    $sql = "SELECT * FROM `products` ORDER BY `product_id` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($product_id){
    $sql = "SELECT * FROM `products` WHERE `product_id` = :product_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':product_id', $product_id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function filterByBoek(){
    $sql = "SELECT * FROM `products` WHERE `tag` LIKE 'boek'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByEboek(){
    $sql = "SELECT * FROM `products` WHERE `tag` LIKE 'eboek'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByAbonnement(){
    $sql = "SELECT * FROM `products` WHERE `tag` LIKE 'abonnement'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filterByExtra(){
    $sql = "SELECT * FROM `products` WHERE `tag` LIKE 'extra'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectRecommended(){
    $sql = "SELECT * FROM `products` ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  /*public function placeorder() {
    $sql = "INSERT INTO `orders` (`productname`, `price`, `quantity`) VALUES (:productname, :price, :quantity)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue("productname", $_SESSION['cart']['product']);
    $stmt->bindValue("price", $_SESSION["price"]);
    $stmt->bindValue("quantity", $_SESSION["quantity"]);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }*/


}
