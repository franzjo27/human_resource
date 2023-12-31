<?php
class Grant_access_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->accounts_db = $this->load->database('accounts', true);
        $this->table = 'status';
    }

    public function status()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function institution()
    {
        $query = $this->accounts_db->get('institutions');
        return $query->result();
    }

    public function rows()
    {
        $where = array(
            'is_deleted' => 0
        );

        $query = $this->accounts_db->get_where('users', $where);
        return $query->result();
    }
    public function row($id) // dto ang focusssss hahaha
    {
        $where = array(
            'is_deleted' => 0,
            'id' => $id
        );

        $query = $this->accounts_db->get_where('users', $where);
        return $query->row();
    }

    public function add($data)
    {
        $this->accounts_db->insert('users', $data);
        return true;
    }

    public function update($id, $data)
    {
        $where = array(
            'is_deleted'   => 0,
            'id'          => $id
        );

        $this->accounts_db->update('users', $data, $where);
        return true;
    }

    public function delete($id, $data)
    {
        $where = array(
            'is_deleted'   => 0,
            'id'           => $id
        );

        $this->accounts_db->update('users', $data, $where);
        return true;
    }
}
