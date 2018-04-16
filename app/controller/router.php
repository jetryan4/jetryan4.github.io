<?php

include_once '../global.php';

$action = $_GET['action'];


$sc = new SiteController();
$sc->route($action);

class SiteController{
  public function route($action){
    switch($action){
      case 'home':
        $this->home();
        break;
      case 'members':
        $this->members();
        break;
    }
  }

    public function home(){
      include_once SYSTEM_PATH.'/crypto.html';
    }

    public function members(){
      include_once SYSTEM_PATH.'/members.html';
    }
}

 ?>
