<?php
class EmpDetails_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->emp_info                 = 'emp_info';
    }

    public function rows()
    {
        $where = array(
            'is_deleted' => 0
        );

        $this->db->order_by('date_created', 'DESC');
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function row($slug)
    {
        $where = array(
            'is_deleted' => 0,
            'slug'       => $slug
        );

        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }

    public function limit_rows() //can be called on main page
    {
        $where = array(
            'is_deleted' => 0,
            'status'     => 1
        );

        $this->db->order_by('date_created', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }
    public function add($data)
    {
        $this->db->insert($this->emp_info, $data);
        return true;
    }

























    public function edit($slug, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'slug'       => $slug
        );

        $this->db->update($this->table, $data, $where);
        return true;
    }

    public function delete($slug, $data)
    {
        $where = array(
            'is_deleted'    => 0,
            'slug'         => $slug
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
            $this->db->like('title', $search_term);
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
