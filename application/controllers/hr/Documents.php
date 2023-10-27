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
        $this->load->view('hrs/employee/docs/psa');
        $this->load->view('hrs/templates/footer');
    }
    public function psa()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/docs/marriage');
        $this->load->view('hrs/templates/footer');  
    }
    public function dependent()
    {

    }
    public function marriage()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/docs/dependent');
        $this->load->view('hrs/templates/footer');  
    }
    public function tor_diploma()
    {
    }
    public function employment()
    {
    }
    public function security()
    {
    }

    public function medical()
    {
    }

    public function license()
    {
    }
}
