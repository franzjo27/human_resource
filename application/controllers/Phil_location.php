<?php
class Phil_location extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Phil_location_model');
    }
    public function index()
    {
    
        $data['prov'] = $this->Phil_location_model->fetch_country();
        $this->load->view('hrs/location/ajax', $data);
    }

    public function fetch_state()
    {
        if ($this->input->post('provCode')) {
            echo  $this->Phil_location_model->fetch_state($this->input->post('provCode'));
        }
    }

    public function fetch_city()
    {
        if ($this->input->post('citymunCode')) {
            echo $this->Phil_location_model->fetch_city($this->input->post('citymunCode'));
        }
    }
}
//provinces barangay cities