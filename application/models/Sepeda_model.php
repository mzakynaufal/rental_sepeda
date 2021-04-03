<?php
defined('BASEPATH') or exit;

class sepeda_model extends CI_Model{

    public function get_all()
    {
        $query = $this->db->get('sepeda')->result_array();
        return $query;
    }

    public function get_bike()
    {
        $this->db->where('sepeda.status', 'ada');
        return $this->get_all();
    }
    
    public function show($id)
    {
        $this->db->where('id_sepeda', $id);
        $query = $this->db->get('sepeda')->row_array();
        return $query;
    }

    public function count()
    {
        $query = $this->db->get('sepeda')->num_rows();
        return $query;
    }

    public function status_ada()
	{
		$this->db->where('status', 'ada');
		return $this->db->get('sepeda')->result_array();
	}

    public function tambah_data($data)
    {
        $this->db->insert('sepeda', $data);
    }

    public function edit_data($id)
    {
        $this->db->where('id_sepeda', $id);
        $query = $this->db->get('sepeda');
        return $query;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_sepeda', $id);
        $this->db->update('sepeda', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_sepeda', $id);
        $this->db->delete('sepeda');
    }
}