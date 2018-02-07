<?php
  /**
   *
   */
  class Register extends CI_Controller{

    function index(){
      $this->master('/signup/signup');
    }

    function master($page){
      $this->load->view('home/header');
      $this->load->view($page);
      $this->load->view('home/footer');

    }

    function tenant(){
      $this->master('/signup/tenant');
    }
    function owner(){
      $this->master('/signup/tenant');
    }


  }