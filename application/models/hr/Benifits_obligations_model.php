<?php
class Benifits_obligations_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table  = 'obligation_benifits';
    }

    public function rows()
    {
    }

    public function row($id)
    {
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
}
