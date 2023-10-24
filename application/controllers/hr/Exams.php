<?php

class Exams extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr/exams_model');
    }

    public function index()
    {

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/exams');
        $this->load->view('hrs/templates/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('cert[]', 'Certification',  'trim|required');
        $this->form_validation->set_rules('date[]', 'Date Taken',  'trim|required');
        $this->form_validation->set_rules('rate[]', 'Rate',  'trim|required');

        if ($this->form_validation->run()) {

            $cert  = $this->input->post('cert');
            $date  = $this->input->post('date');
            $rate  = $this->input->post('rate');

            for ($i = 0; $i < count($cert); $i++) {
                $data[] = array(
                    'cert'  =>  $cert[$i],
                    'date'  =>  $date[$i],
                    'rate'  =>  $rate[$i]
                );
            }


            $result = $this->exams_model->add($data);
            if ($result) {
                redirect('hr/work_exp');
            }
        }
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/exams');
        $this->load->view('hrs/templates/footer');
    }
}
