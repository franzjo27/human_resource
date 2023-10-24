<?php
class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function rows()
    {
        $where = array(
            'is_deleted' => 0
        );


        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function row($id)
    {
        $where = array(
            'is_deleted' => 0,
            'id'         => $id
        );

        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }


    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
    public function edit($id, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'id'         => $id
        );

        return $this->db->update($this->table, $data, $where);
        //$this->db->last_query();

    }

    public function delete($id, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'id'         => $id
        );


        $this->db->update($this->table, $data, $where);
        return true;
    }

    public function search($search_term = false, $order_col, $order_dir, $limit, $offset)
    {
        $where = array(
            'is_deleted' => 0,
        );

        if ($search_term) {

            $this->db->like('lname', $search_term);
            $this->db->or_like('date_created', $search_term);
        }

        if ($limit > 0)
            $this->db->limit($limit, $offset);

        $this->db->order_by($order_col, $order_dir);

        $query = $this->db->get_where($this->table, $where);

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return array();
    }
}
