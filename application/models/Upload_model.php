<?php

class Upload_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
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
