<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductController extends Controller {

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {

    $products = $this->productDAO->selectAllProducts();

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
