<?php
class Home extends Controller{
    public function __construct(){
        
    }

    public function index(){
      $this->view('pages/login');
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }else{
            $this->view('pages/login');
        }
    }

    public function registro(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

      }else{
          $this->view('pages/registro');
      }
    }
}
?>