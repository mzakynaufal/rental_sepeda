<?php
defined('BASEPATH') OR exit;

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['login'])) {
            redirect('login');
        }
        $this->load->model('Peminjaman_model', 'pinjam');
    }

    public function index()
    {
        
        $data = $this->pinjam->get_all();
        $get = [
            'data' => $data,
        ];
        $this->load->view('pages/header', $get);    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/home');    
        $this->load->view('pages/footer');    
    }

    public function tabel_peminjaman()
    {
        $data = $this->pinjam->get_all();
        $get = [
            'data' => $data,
        ];
        $this->load->view('pages/header', $get);    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/table');    
        $this->load->view('pages/footer');
    }

    public function tambah(){

        $this->load->view('pages/header');    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/home');    
        $this->load->view('pages/footer');
    }

    public function tambah_data(){
        $data = $this->input->post();
        $data['tanggal_pinjam'] = date('Y-m-d');
        // var_dump($data);die;
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT); 
        $data = $this->pinjam->tambah_data($data) && $this->pinjam->set_sepeda($data['id_sepeda'], 'dipinjam');
        // var_dump($data);
        redirect('sepeda');
    }

    public function kembali_data()
    {
        $data = $this->input->post();
        $data = $this->pinjam->update_data($data['no_peminjaman'], ['tanggal_kembali' => date('Y-m-d')]) && $this->pinjam->set_sepeda($data['id_sepeda'], 'ada');
        redirect('peminjaman/tabel_peminjaman');
    }

    public function test()
    {
        // var_dump($_SERVER);
        // session_start();
        
        // session_destroy();
        // var_dump($GLOBALS);
        // $_SESSION['user'] = 'zaky';
        unset($_SESSION['user']);
        var_dump($_SESSION);
        $data = [
            'angka' => 123,
        ];
        if (!empty($data['angka'])) {
            echo 'ada';
        }
    }

    public function edit($id)
    {
        $data = $this->pinjam->edit_data($id)->result();
        $get = [
            'data' => $data,
        ];
        $this->load->view('pages/header', $get);    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/crud/edit');    
        $this->load->view('pages/footer');
    }

    public function update_data()
    {   
        $id = $this->input->post('id_sepeda');
        $data = $this->input->post();
        $data = $this->pinjam->update_data($id, $data);
        redirect('sepeda/tabel_sepeda');
    }

    public function hapus($id)
    {
        $data = $this->pinjam->delete_data($id);
        redirect('sepeda/tabel_sepeda');
    }
}
