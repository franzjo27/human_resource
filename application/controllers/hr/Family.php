<?php
class Family extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr/family_model');
        $this->load->model('upload_model');
    }

    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/family');
        $this->load->view('hrs/templates/footer');
    }


    public function add()
    {
        $this->form_validation->set_rules('fullname[]', 'Fullname',  'trim|required');
        $this->form_validation->set_rules('dob[]',      'Birthday',  'trim|required');
        $this->form_validation->set_rules('relation[]', 'Relation',  'trim|required');

        if ($this->form_validation->run()) {

            $fullname   = $this->input->post('fullname');
            $dob        = $this->input->post('dob');
            $relation   = $this->input->post('relation');

            for ($i = 0; $i < count($fullname); $i++) {
                $data[] = array(
                    'fullname' => $fullname[$i],
                    'dob'       => $dob[$i],
                    'relation'  => $relation[$i]
                );
            }
           

            $result = $this->family_model->add($data);
            if ($result) {
                redirect('hr/education');
            }
        }
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/family');
        $this->load->view('hrs/templates/footer');
    }
}
