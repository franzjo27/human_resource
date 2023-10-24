<?php

class Benifits_obligations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('hr/benifits_obligations_model');
    }
    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/benifits_obligation');
        $this->load->view('hrs/templates/footer');
    }
    public function add()
    {
        $this->form_validation->set_rules('tin_no',          'Tin number',        'trim|required');
        $this->form_validation->set_rules('tax_code',        'Tax code',          'trim|required');
        $this->form_validation->set_rules('sss_no',          'SSS number',        'trim|required');
        $this->form_validation->set_rules('philhealth_no',   'PhilHealth number', 'trim|required');
        $this->form_validation->set_rules('pagibig_no',      'trim|required',     'trim|required');

        if ($this->form_validation->run()) {
            $user = 6;
            $data = array(
                'tin_no'         => $this->input->post('tin_no'),
                'tax_code'       => $this->input->post('tax_code'),
                'sss_no'         => $this->input->post('sss_no'),
                'philhealth_no'  => $this->input->post('philhealth_no'),
                'pagibig_no'     => $this->input->post('pagibig_no'),
                'created'        => $user,
                'date_created'   => date('Y-m-d')

            );
            

            $result = $this->benifits_obligations_model->add($data);


            if ($result) {
                redirect('hr/family');
            } else {
                $this->load->view('hrs/templates/header');
                $this->load->view('hrs/templates/nav');
                $this->load->view('hrs/employee/benifits_obligation');
                $this->load->view('hrs/templates/footer');
            }
        }
    }
}
