<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [
			'title' => 'Home',
		];
		$this->load->view('layout/header', $data);
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'About',
		];
		$this->load->view('layout/header', $data);
		$this->load->view('pages/about');
		$this->load->view('layout/footer');
	}

	public function profile($name='zaky')
	{
		$data = [
			'title' => 'Profile',
			'nama' => $name ,
		];
		$this->load->view('layout/header', $data);
		$this->load->view('pages/profile');
		$this->load->view('layout/footer');
	}

	public function coba()
	{
		echo base_url() . '<br>';
		echo site_url('welcome/index') . '<br>';
		echo APPPATH . '<br>';
		var_dump(BASEPATH) . '<br>';
		echo current_url();
	}

	public function pass()
	{
		$kata = 'admin';
		$pass = password_hash($kata,PASSWORD_DEFAULT);
		echo $pass;
		// var_dump(password_verify($kata, $pass));
		// var_dump($kata == $pass);
	}
}
