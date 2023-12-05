<?php

class Education extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr/education_model');
    }
    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/education');
        $this->load->view('hrs/templates/footer');
    }
    public function add()
    {

        $this->form_validation->set_rules('degree[]',    'Degree',         'trim|required');
        $this->form_validation->set_rules('school[]',    'School',         'trim|required');
        $this->form_validation->set_rules('date_grad[]', 'Date Graduated', 'trim|required');

        if ($this->form_validation->run()) {


            $degree      = $this->input->post('degree');
            $major       = $this->input->post('major');
            $minor       = $this->input->post('minor');
            $school      = $this->input->post('school');
            $date_grad   = $this->input->post('date_grad');
            $user = 1;
            for ($i = 0; $i < count($degree); $i++) {
                $data[] = array(

                    'degree'        => $degree[$i],
                    'major'         => $major[$i],
                    'minor'         => $minor[$i],
                    'school'        => $school[$i],
                    'date_grad'     => $date_grad[$i],
                    'eid'           => 1,
                    'empID'         => 1,
                    'created'       => $user,
                    'date_created'  => date('Y-m-d')
                );
            }

            $result = $this->education_model->add($data);
            if ($result) {
                redirect('hr/exams');
            }
        }

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/education');
        $this->load->view('hrs/templates/footer');
    }
}
