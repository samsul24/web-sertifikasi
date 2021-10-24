<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Homepage extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('curl');
    $this->load->library('session');
  }

  public function index()
  {

    $data['title'] = 'Homepage';
    $this->load->view('home/index', $data);
  }
  public function about()
  {
          $data['title'] = "Dashboard ";
          $this->load->view('dashboard/bar');
          $this->load->view('home/about', $data);
  }
}
