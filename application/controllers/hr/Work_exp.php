<?php

class Work_exp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr/work_exp_model');
    }

    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/work_exp');
        $this->load->view('hrs/templates/footer');
    }
    public function add()
    {
        $this->form_validation->set_rules('employer[]',      'Name and Address of Employer', 'trim|required');
        $this->form_validation->set_rules('post[]',          'Position',                     'trim|required');
        $this->form_validation->set_rules('years_service[]', 'Years of Service',             'trim|required');

        if ($this->form_validation->run()) {

            $employer       = $this->input->post('employer');
            $post            = $this->input->post('post');
            $years_service  = $this->input->post('years_service');

            for ($i = 0; $i < count($employer); $i++) {
                $data[] = array(
                    'employer'         =>  $employer[$i],
                    'post'             =>  $post[$i],
                    'years_service' =>  $years_service[$i]
                );
            }


            $result = $this->work_exp_model->add($data);
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
