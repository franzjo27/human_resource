<?php

class Grant_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr_access/Grant_access_model');
    }

    public function index()
    {
    
        $data['users'] = $this->Grant_access_model->rows();
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/grant_access/index', $data);
        $this->load->view('hrs/templates/footer');
    }

    public function add()
    {


        $this->form_validation->set_rules('emp_number',  'Employee Number', 'trim|required');
        $this->form_validation->set_rules('status',      'Status',          'trim|required');
        $this->form_validation->set_rules('institution', 'Employee',        'trim|required');

        if ($this->form_validation->run()) {
            $user = 6;
            $data = array(
                'emp_number'  => $this->input->post('emp_number'),
                'pword'       => hash('sha256', 'abc123!@#'), // echo $test = md5('abc123!@#');
                'status'      => $this->input->post('status'),
                'institution' => $this->input->post('institution'),
                'created'     => date('Y-m-d'),
                'created_by'  => $user
            );

            $result = $this->Grant_access_model->add($data);
            if($result){

            }
        }


        $data['status'] = $this->Grant_access_model->status();
        $data['insti'] = $this->Grant_access_model->institution();
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/grant_access/emp_access', $data);
        $this->load->view('hrs/templates/footer');
    }
}
