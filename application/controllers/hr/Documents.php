<?php

class Documents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('');
    }
    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents');
        $this->load->view('hrs/templates/footer');
    }
    public function add()
    {
    }
}
