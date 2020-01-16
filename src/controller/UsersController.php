<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class UsersController extends Controller {

  private $productDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function login() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'login') {
        header('Location: index.php?page=overview');
        exit();
      }

    }

    $this->set('title', 'Login');

  }

  public function register() {



  }

  public function overview() {


    }


}
