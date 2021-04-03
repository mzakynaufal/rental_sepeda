<?php
defined('BASEPATH') or die;

class Login_model extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('user')->result_array();
        return $query;
    }

    public function show($users)
    {
        $this->db->where('username', $users);
        $query = $this->db->get('user')->row_array();
        return $query;
    }

    public function tambah_data($data)
    {
        $this->db->insert('user', $data);
    }

    public function edit_data($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}