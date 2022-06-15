<?php

class Home extends CI_Controller{

  function __construct(){
      parent::__construct();

      
      }
  }
    function index(){

    $this->load->view('home/template/header.php');
		$this->load->view('v_home');
    $this->load->view('home/template/footer.php');
    }
}
