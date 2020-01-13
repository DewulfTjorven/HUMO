<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductController extends Controller {

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {

    // Search nog te doen
    if (!empty($_GET['action']) && $_GET['action'] == 'search') {
      $products = $this->productDAO->filterBySearch();
    }else{
      // Geen search value -> Alle producten tonen
      $products = $this->productDAO->selectAllProducts();
    }

    // Filteren
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

    // DAO resultaat in var steken
    $this->set('products', $products);
    $this->set('title', 'index');

  }

  public function detail() {
    // Get id om te kijken of ons product klopt
    if(!empty($_GET['product_id'])){
     $product = $this->productDAO->selectById($_GET['product_id']);
    }
    // Geen product gevonden? Naar index met foutmelding
    if(empty($product)){
      $_SESSION['error'] = 'Het product werd niet gevonden';
      header('Location:index.php');
      exit();
    }

    if (isset($_POST['submit']) && $_POST['action'] == 'add') {
      $products = $this->productDAO->filterBySearch();
    }else{
      // Geen search value -> Alle producten tonen
      $products = $this->productDAO->selectAllProducts();
    }

    $this->set('product',$product);

}

}
