<?php

class Upload_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function upload_image_data($data)
    {

        $config['upload_path']   = './emp_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $data;

        $this->load->library('upload', $config);
        // echo  $test = ('image');

        if (! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else {
            return $this->upload->data();
        }



    /*     $uploaded =  $this->upload->do_upload('image');
        if ($uploaded) {
            return $this->upload->data();
        } else {
            $err =  $this->upload->display_errors();
            return $err;
        } */
    }



    //original

         public function upload_image()
    {

        $config['upload_path']   = './emp_image/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $uploaded =  $this->upload->do_upload('image');
        if ($uploaded) {
            return $this->upload->data();
        } else {
            $err =  $this->upload->display_errors();
            return $err;
        }
    } 
}
