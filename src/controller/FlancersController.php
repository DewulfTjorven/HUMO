<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/FlancerDAO.php';

class FlancersController extends Controller {

  function __construct() {
    $this->flancerDAO = new FlancerDAO();
  }

  public function dashboard() {

    if (!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'recommendations') {
      $flancers = $this->flancerDAO->filterByRecommendations();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'pricelow'){
      $flancers = $this->flancerDAO->filterByPrice();
    }else if(!empty($_GET['action']) && $_GET['action'] == 'filter' && $_GET['orderby'] == 'location'){
      $flancers = $this->flancerDAO->filterByLocation();
    }else{
      $flancers = $this->flancerDAO->selectAllFlancers();
    }

    $this->set('flancers', $flancers);
    $this->set('title', 'dashboard');

  }

  public function detail() {
    if(!empty($_GET['id'])){
     $flancer = $this->flancerDAO->selectById($_GET['id']);
   }

   $this->set('flancer',$flancer);

  }

  public function form() {
    if(!empty($_POST["action"]) && $_POST["action"] == "createjob") {
        $jobs = $this->flancerDAO->createJob($_POST);
    }
  }

  public function formupdate() {
    $lastjob = $this->flancerDAO->selectLastAddedJob();
    $this->set('lastjob',$lastjob);

    if(!empty($_GET['state'])){
      if($_GET['state'] == 'updated'){
        $this->set('updated',true);
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'updatejob'){
        $job['id'] = $_POST['id'];
        $job['duration'] = $_POST['duration'];
        $job['skills'] = $_POST['skills'];
        $job['price'] = $_POST['price'];
        $job['location'] = $_POST['location'];

        $updatedJob = $this->flancerDAO->updateJob($job);

        header('Location:index.php?page=added');
        exit;
      }
    }
  }

  public function jobUpdate() {
    if(!empty($_GET['id'])){
      $job = $this->flancerDAO->selectByJobId($_GET['id']);
      $this->set('job',$job);
    }

    if(!empty($_GET['state'])){
      if($_GET['state'] == 'updated'){
        $this->set('updated',true);
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'jobupdate'){
        $job['id'] = $_POST['id'];
        $job['jobname'] = $_POST['jobname'];
        $job['description'] = $_POST['description'];
        $job['duration'] = $_POST['duration'];
        $job['skills'] = $_POST['skills'];
        $job['price'] = $_POST['price'];
        $job['location'] = $_POST['location'];

        $updatedJob = $this->flancerDAO->updateJobInfo($job);

        header('Location:index.php?page=job');
        exit;
      }
    }
  }
  
  public function job() {
    $jobs = $this->flancerDAO->selectAllJobs();
    $this->set('jobs',$jobs);

  }

  public function jobdetail() {

    if(!empty($_GET['id'])){
      $job = $this->flancerDAO->selectByJobId($_GET['id']);
    }

    if (!empty($_GET['action'])) {
      if ($_GET['action'] == 'delete' && isset($_GET['id'])) {
        $flancerDAO->deleteJob($_GET['id']);
      }
    }

    $this->set('job',$job);
  
  }

  public function added() {
    $lastjob = $this->flancerDAO->selectLastAddedJob();
    $this->set('lastjob',$lastjob);
  }

  public function index() {
  }
  public function intro() {
  }

}


