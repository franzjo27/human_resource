<?php

class Documents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('upload_model');
        $this->load->model('hr/documents_model');
    }
    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/psa');
        $this->load->view('hrs/templates/footer');
    }
    public function psa()
    {
        $emp = '123';
        $docs = 'PSA_' . $emp;
        if ($this->input->post('submit')) {

            $uploaded =  $this->upload_model->upload_image_data($docs);
            /*    if(isset()) */
            if ($uploaded) {
                $name =  $uploaded['file_name'];
                $path =  $uploaded['file_path'];
                $description = 'Philippine Statistics Authority Birth Certificate';


                $data = array(
                    'empID'         => $emp,
                    'name'          => $name,
                    'description'   => $description,
                    'path'          => $path,
                    'created'       => $emp,
                    'date_created'  => date('Y-m-d')

                );

                $results = $this->documents_model->add($data);

                if ($results) {
                    $this->session->set_flashdata('msg', 'PSA Successfully Uploaded!');
                    redirect('hr/documents/marriage_cert');
                } else {
                    $this->session->set_flashdata('errmsg', 'PSA failed to upload');
                }
            }
        }

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/psa');
        $this->load->view('hrs/templates/footer');
    }
    public function marriage_cert()
    {
        $emp = '123';
        $docs = 'MarrageCert_' . $emp;

        if ($this->input->post('submit')) {

            $uploaded =  $this->upload_model->upload_image_data($docs);
            /*    if(isset()) */
            if ($uploaded) {
                if (!isset($uploaded['error'])) {
                    $name =  $uploaded['file_name'];
                    $path =  $uploaded['file_path'];
                    $description = 'Marrage Certificate';

                    $data = array(
                        'empID'         => $emp,
                        'name'          => $name,
                        'description'   => $description,
                        'path'          => $path,
                        'created'       => $emp,
                        'date_created'  => date('Y-m-d')

                    );

                    $results = $this->documents_model->add($data);

                    if ($results) {
                        $this->session->set_flashdata('msg', 'PSA Successfully Uploaded!');
                        redirect('hr/documents/marriage_cert');
                    }
                } else {

                    $this->session->set_flashdata('errmsg', $uploaded['error']);
                }
            }
        }
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/marriage');
        $this->load->view('hrs/templates/footer');
    }
    public function dependent_psa()
    {
        $emp  = '123';
        $docs = 'Dependent' . $emp . '_' . date("s");;


        $uploaded =  $this->upload_model->upload_image_data($docs);
        /*    if(isset()) */
        if (!isset($uploaded['error'])) {

            $name =  $uploaded['file_name'];
            $path =  $uploaded['file_path'];
            $description = 'Dependent PSA';

            $data = array(
                'empID'         => $emp,
                'name'          => $name,
                'description'   => $description,
                'path'          => $path,
                'created'       => $emp,
                'date_created'  => date('Y-m-d')

            );

            $results = $this->documents_model->add($data);

            if ($results) {
                $this->session->set_flashdata('msg', 'PSA Successfully Uploaded!');
                // redirect('hr/documents/dependent_psa');
            } else {

                $this->session->set_flashdata('errmsg', $uploaded['error']);
            }
        }


        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/dependent');
        $this->load->view('hrs/templates/footer');
    }

    public function tor_diploma()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/tor');
        $this->load->view('hrs/templates/footer');
    }
    public function employment_cert()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/cert_employment');
        $this->load->view('hrs/templates/footer');
    }
    public function clearance()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/clearance');
        $this->load->view('hrs/templates/footer');
    }

    public function medical()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/medical');
        $this->load->view('hrs/templates/footer');
    }

    public function license()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/documents/license');
        $this->load->view('hrs/templates/footer');
    }
}
