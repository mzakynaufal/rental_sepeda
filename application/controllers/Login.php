<?php
defined('BASEPATH') or die;

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
    }

    public function index()
    {  
        $this->form_validation->set_rules('username', 'user', 'required', [
            'required' => 'Username harus diisi!',
        ]);
        $this->form_validation->set_rules('password', 'pass', 'required', [
            'required' => 'Password harus diisi!',
        ]);

        if ($this->form_validation->run()) {
            return $this->proses();
        } else {
            $this->load->view('pages/login/login');
        }
    }

    private function proses()
    {
        $data = $this->input->post();
        // var_dump($data);
        $users =  $this->input->post('username');
        $data1 = $this->login->show($users);
        if ($data1 == null) {
            redirect('login/index');
        } else {
            if (password_verify($data['password'],$data1['password']) ) {
                $_SESSION['login'] = true;
                redirect('sepeda');
            } else {
                redirect('login');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        redirect('login');
    }
}