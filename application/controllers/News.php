<?php
defined('BASEPATH') or exit('No direct script access allowed');


class News extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->lang->load('news');
    // $this->lang->load('news', 'dutch');
  }
  public function index()
  {

    $this->load->helper('url');

    $data['title2'] = $this->lang->line('news_title');

    $data['title'] = 'new technology';

    $data['users'] = array('ram', 'bindu');


    $this->load->view('news/index', $data);
  }

  public function details($param1)
  {
    echo 'Details news' . $param1;
  }
}