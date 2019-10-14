<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiuser extends CI_Controller {

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
	// __construct slalu dijalankan setiap multiuser.php dipanggil
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('multiuser/index');
			$this->load->view('templates/auth_footer');	
		} else {
			// validasi terisi lolos
			$this->_login();
		}
	}

	// Private = yang hanya bisa diakses oleh kls ini saja, tidak bisa melalui url
	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$petugas = $this->db->get_where('petugas', ['username' => $username])->row_array();

		// petugasnya ada
		if ($petugas) {
			// cek password
			if (password_verify($password, $petugas['password'])) {
				$data = [
					'username' => $petugas['username'],
					'idlevel' => $petugas['idlevel']
				];
				$this->session->set_userdata($data);
				if ($petugas['idlevel'] == "1") {
					redirect('admin/entri');	
				} else{
					redirect('petugas');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('multiuser');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
			redirect('multiuser');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('idlevel');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('multiuser');
	}
}