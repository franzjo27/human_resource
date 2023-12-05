<?php
class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr/Employee_model');
        $this->load->model('Phil_location_model');
        $this->load->model('upload_model');
    }

    public function index()
    {
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/index');
        $this->load->view('hrs/templates/footer');
    }

    public function empdetails()
    {
        $data['prov'] = $this->Phil_location_model->fetch_country();
        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/emp_details', $data);
        $this->load->view('hrs/templates/footer');
    }

    public function add()
    {

        $this->form_validation->set_rules('lname',        'Last Name',      'trim|required');
        $this->form_validation->set_rules('fname',        'First Name',     'trim|required');
        $this->form_validation->set_rules('prov',         'Province',       'trim|required');
        $this->form_validation->set_rules('mun',          'Municipality',   'trim|required');
        $this->form_validation->set_rules('brgy',         'Barangay',       'trim|required');
        $this->form_validation->set_rules('street',       'Street',         'trim|required');
        $this->form_validation->set_rules('contact',      'Contact Number', 'trim|required');
        $this->form_validation->set_rules('email',        'Email Address',  'trim|required');
        $this->form_validation->set_rules('dob',          'Date of Birth',  'trim|required');
        $this->form_validation->set_rules('pbirth',       'Place of birth', 'trim|required');
        $this->form_validation->set_rules('citizen',      'Citezenship',    'trim|required');
        $this->form_validation->set_rules('religion',     'Relegion',       'trim|required');
        $this->form_validation->set_rules('marital_stat', 'Marital Status', 'trim|required');
        $this->form_validation->set_rules('weight',       'Weight',         'trim|required');
        $this->form_validation->set_rules('height',       'Height',         'trim|required');

        if ($this->form_validation->run()) {


            $uploaded =  $this->upload_model->upload_image();

            if (is_array($uploaded)) {
                $filename =  $uploaded['file_name'];

                $user = 6;
                $data = array(
                    'lname'         => $this->input->post('lname'),
                    'fname'         => $this->input->post('fname'),
                    'prov'          => $this->input->post('prov'),
                    'mun'           => $this->input->post('mun'),
                    'brgy'          => $this->input->post('brgy'),
                    'street'        => $this->input->post('street'),
                    'contact'       => $this->input->post('contact'),
                    'email'         => $this->input->post('email'),
                    'dob'           => $this->input->post('dob'),
                    'pbirth'        => $this->input->post('pbirth'),
                    'citizen'       => $this->input->post('citizen'),
                    'religion'      => $this->input->post('religion'),
                    'marital_stat'  => $this->input->post('marital_stat'),
                    'weight'        => $this->input->post('weight'),
                    'height'        => $this->input->post('height'),
                    'created'       => $user,
                    'date_created'  => date('Y-m-d')
                );

                $result = $this->Employee_model->add($data);

                if ($result) {
                    redirect('hr/benifits_obligations');
                } else {
                    echo 'ayaw';
                }
            }
        }

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/emp_details');
        $this->load->view('hrs/templates/footer');
    }

    /* public function benifits_obligations()
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
            $result = $this->Employee_model->benifits_obligations_add($data);
            if ($result) {
                $this->load->view('hrs/templates/header');
                $this->load->view('hrs/templates/nav');
                $this->load->view('hrs/employee/benifits_obligation');
                $this->load->view('hrs/templates/footer');
            } else {
                echo 'ayaw';
            }
        } 


        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/benifits_obligation');
        $this->load->view('hrs/templates/footer');
    }
    public function family()
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

            $result = $this->Employee_model->family_add($data);
            if ($result) {
            }
        }


        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/family');
        $this->load->view('hrs/templates/footer');
    }

    public function education()
    {
        $test =  $this->input->post('degree');
        var_dump($test);
        die;
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

            $result = $this->Employee_model->education_add($data);
            if ($result) {
                redirect('Benifits_obligations');
            }
        }

        $this->load->view('hrs/templates/header');
        $this->load->view('hrs/templates/nav');
        $this->load->view('hrs/employee/education');
        $this->load->view('hrs/templates/footer');
    }*/
}


  /* $fullname  =  $this->input->post('fullname');  //alternative for multiple insert
        if (isset($fullname)) {

            $firstnames = $this->input->post('firstname');
            $dobs = $this->input->post('dob');
            $relations = $this->input->post('relation');

            $data = array();

            for ($i = 0; $i < count($firstnames); $i++) {
                $data[] = array(
                    'firstname' => $firstnames[$i],
                    'dob' => $dobs[$i],
                    'relation' => $relations[$i]
                );
            }

            $this->Employee_model->family_add($data);
        } */