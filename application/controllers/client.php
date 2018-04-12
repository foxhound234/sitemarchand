<?php

class client extends CI_Controller{

 public function _construct()
 {
  parent::_construct();
  $this->load->helper('url');

  $this->load->helper('assets');

  $this->load->library('pagination');

  $this->load->model('modeleclient');

  $this->load->model('modeleproduit');

  $this->load->model('modelecategorie');
 }
 








}