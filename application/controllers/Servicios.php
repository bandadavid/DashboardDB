<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('proceso');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('servicios/index');
        $this->load->view('footer');
    }
}
