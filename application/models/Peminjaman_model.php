<?php
defined('BASEPATH') or die;

class Peminjaman_model extends CI_Model
{
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('sepeda', 'sepeda.id_sepeda = peminjaman.id_sepeda');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_sepeda()
    {
        $this->db->where('sepeda.status', 'ada');
        return $this->get_all();
    }
    public function show($pinjam)
    {
        $this->db->where('id_peminjaman', $pinjam);
        $query = $this->db->get('peminjaman')->row_array();
        return $query;
    }

    public function tambah_data($data)
    {
        return $this->db->insert('peminjaman', $data);
    }

    public function edit_data($id)
    {
        $this->db->where('id_peminjaman', $id);
        $query = $this->db->get('peminjaman');
        return $query;
    }

    public function set_sepeda($id, $status)
    {
        $this->db->where('id_sepeda', $id);
        $query = $this->db->update('sepeda', ['status' => $status]);
        return $query;
    }

    public function dipinjam()
	{
		$this->db->where("peminjaman.tanggal_kembali", null);
		return $this->get_all();
	}

    public function update_data($id, $data)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->update('peminjaman', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('peminjaman');
    }
}