<?php

class Documents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_model');
        //$this->load->model('');
    }
    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/psa');
        $this->load->view('hrs/templates/footer');
    }
    public function birth_cert()
    {
        /*   $this->form_validation->set_rules('psacert',  'PSA Certificate', 'trim|required');
        if ($this->form_validation->run()) {
            echo 'run this';        } */

        $uploaded =  $this->upload_model->upload_image();

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/psa');
        $this->load->view('hrs/templates/footer');
    }
    public function marriage_cert()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/marriage');
        $this->load->view('hrs/templates/footer');
    }
    public function dependent_psa()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/dependent');
        $this->load->view('hrs/templates/footer');
    }

    public function tor_diploma()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/tor');
        $this->load->view('hrs/templates/footer');
    }
    public function employment_cert()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/cert_employment');
        $this->load->view('hrs/templates/footer');
    }
    public function clearance()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/clearance');
        $this->load->view('hrs/templates/footer');
    }

    public function medical()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/medical');
        $this->load->view('hrs/templates/footer');
    }

    public function license()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/document/license');
        $this->load->view('hrs/templates/footer');
    }
}
