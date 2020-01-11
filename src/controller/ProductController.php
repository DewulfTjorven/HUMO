<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductController extends Controller {

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {

    if (!empty($_GET['action']) && $_GET['action'] == 'search') {
      $products = $this->productDAO->filterBySearch();
    }else{
      $products = $this->productDAO->selectAllProducts();
    }

    if (!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['filterby'] == 'boek') {
      $products = $this->productDAO->filterByBoek();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['filterby'] == 'eboek'){
      $products = $this->productDAO->filterByEboek();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['filterby'] == 'extra'){
      $products = $this->productDAO->filterByExtra();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['filterby'] == 'abonnement'){
      $products = $this->productDAO->filterByAbonnement();
    }else{
      $products = $this->productDAO->selectAllProducts();
    }

    $this->set('products', $products);
    $this->set('title', 'index');

  }

  public function detail() {
    if(!empty($_GET['id'])){
     $product = $this->productDAO->selectById($_GET['id']);
   }

   $this->set('product',$product);

}

}
