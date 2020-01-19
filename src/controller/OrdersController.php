<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class OrdersController extends Controller {

  private $productDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function cart() {
    // form action -> naar waar moet je gaan na het submitten
    // action van input -> action die je gebruikt in je controller
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        $_SESSION['info'] = 'Product werd toegevoegd';
        header('Location: index.php?page=detail&product_id=' . $_POST['product_id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=cart');
      exit();
    }

    $this->set('title', 'Winkelmandje');

  }

  private function _handleAdd() {
    // Als session array leeg is -> product met specifieke id in session steken
    if (empty($_SESSION['cart'][$_POST['product_id']])) {
      error_reporting(0);
      $product = $this->productDAO->selectById($_POST['product_id']);
      if (empty($product)) {
        return;
      }
        $_SESSION['cart'][$_POST['product_id']] = array(
          'productname' => $productname,
          'product' => $product,
          'quantity' => $_POST['quantity']-1,
          'korting' => $_POST['korting']
          );
    }
    $_SESSION['cart'][$_POST['product_id']]['quantity']++;
  }

  private function _handleRemove() {
    // Zit er een item in de session? dan remove wanneer removen
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$productId]);
      }
    }
  }

  public function overview() {
    if(!empty($_POST["action"]) && $_POST["action"] == "pay") {
        $orders = $this->productDAO->createOrder();
        echo var_dump($_SESSION['cart']);
    }

    $this->set('title', 'Overzicht');
  }

}
