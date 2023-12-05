<?php

class Phil_location_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->location_db = $this->load->database('location', true);
    }


    public function fetch_country()
    {
        $query = $this->location_db->get('ref_provinces');

        return $query->result();
    }




    public function fetch_state($country_id)
    {
        $this->location_db->where('provCode', $country_id);

        $query = $this->location_db->get('ref_cities');
        $output = '<option value="">Select Municipality</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->citymunCode . '">' . $row->citymunDesc . '</option>';
        }
        return $output;
    }


    function fetch_city($state_id)
    {
        $this->location_db->where('citymunCode', $state_id);
        $query = $this->location_db->get('ref_brgy');
        $output = '<option value="">Select City</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->brgyCode . '">' . $row->brgyDesc . '</option>';
        }
        return $output;
    }


    /* public function provinces()
    {
        $query = $this->location_db->get_where('ref_provinces');
        return $query->result();
    }
   public function cities($provCode)
    {
        $where = array(
           'provCode' => $provCode
        );

        $query = $this->location_db->get_where('ref_cities', $where);
        return $query->result();
    } */


    /*  public function barangay($citymunCode)
    {
        $where = array(

        );

        $query = $this->location_db->get_where('ref_brgy', $where);
        return $query->result();
    } */
}
