<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class LongreadController extends Controller {



  public function longread() {

  $this->set('title', 'The Road');
  }

}
