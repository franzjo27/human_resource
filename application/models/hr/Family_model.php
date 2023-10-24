<?php
class Family_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table  = 'family';
    }

    public function rows()
    {
    }

    public function row($id)
    {
    }

    public function add($data)
    {
        $this->db->insert_batch($this->table, $data);
        return true;
    }
}
