<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

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
	// __construct slalu dijalankan setiap auth.php dipanggil

	public function index()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		

		echo 'Selamat datang petugas yang bernama ' . $data['petugas']['namapetugas'];
	}

	public function validation()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('petugas/validation', $data);
	}

	public function report()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('petugas/report', $data);
	}

}