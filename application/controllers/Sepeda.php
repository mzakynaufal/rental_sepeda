<?php
defined('BASEPATH') OR exit;

class Sepeda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['login'])) {
            redirect('login');
        }
        $this->load->model('Sepeda_model', 'bike');
        $this->load->model('Peminjaman_model', 'peminjaman');
    }

    public function index()
    {
        
        $data = $this->bike->get_bike();
        $get = [
            'data' => $data,
            'count' => [
                'sepeda' => $this->bike->count(),
            ],
            'data1' => [
				'sepeda' => $this->bike->status_ada(),
				'dipinjam' => $this->peminjaman->dipinjam()
			],
        ];
        $this->load->view('pages/header', $get);    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/home');    
        $this->load->view('pages/footer');    
    }

    public function tabel_sepeda()
    {
        $data = $this->bike->get_all();
        $get = [
            'data' => $data,
        ];
        $this->load->view('pages/header', $get);    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/crud/table');    
        $this->load->view('pages/footer');
    }

    public function tambah(){

        $this->load->view('pages/header');    
        $this->load->view('pages/navbar');    
        $this->load->view('pages/sidebar');    
        $this->load->view('pages/crud/create');    
        $this->load->view('pages/footer');
    }

    public function tambah_data(){
        $data = $this->input->post();
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT); 
        $data = $this->bike->tambah_data($data);
        redirect('sepeda/tabel_sepeda');
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
        $data = $this->bike->edit_data($id)->result();
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
        $data = $this->bike->update_data($id, $data);
        redirect('sepeda/tabel_sepeda');
    }

    public function hapus($id)
    {
        $data = $this->bike->delete_data($id);
        redirect('sepeda/tabel_sepeda');
    }

}
