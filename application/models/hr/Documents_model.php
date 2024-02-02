<?php
class Documents_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table  = 'uploaded_files';
    }

    public function rows()
    {

    }

    public function row()
    {

    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

   
}
