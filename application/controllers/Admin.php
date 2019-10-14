<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_petugas');
		$this->load->model('m_rutekereta');
		$this->load->model('m_rutepesawat');
 	 	$this->load->helper('url');
	}

	public function entri()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datapetugas'] = $this->m_petugas->tampil_data()->result();
		$data['datarutekereta'] = $this->m_rutekereta->tampil_data()->result();
		$data['datarutepesawat'] = $this->m_rutepesawat->tampil_data()->result();
		
		$this->load->view('admin/entri', $data);
	}

	public function tambah_p()
	{
		$this->load->view('admin/entri');
	}

	public function tambahpetugas()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$namapetugas = htmlspecialchars($this->input->post('namapetugas', true));
		$level = htmlspecialchars($this->input->post('level', true));
 
		$data = array(
			'username' => $username,
			'password' => $password,
			'namapetugas' => $namapetugas,
			'idlevel' => $level
			);
		$this->m_petugas->input_data($data,'petugas');
		redirect('admin/entri');
	}

	public function hapuspetugas($idpetugas){
		$where = array('idpetugas' => $idpetugas);
		$this->m_petugas->hapus_data($where,'petugas');
		redirect('admin/entri');
	}

	public function updatepetugas(){
		$idpetugas = htmlspecialchars($this->input->post('idpetugas', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$namapetugas = htmlspecialchars($this->input->post('namapetugas', true));
		$level = htmlspecialchars($this->input->post('level', true));
	 
		$data = array(
			'username' => $username,
			'namapetugas' => $namapetugas,
			'level' => $level
		);
	 
		$where = array(
			'idpetugas' => $idpetugas
		);
	 
		$this->m_petugas->update_data($where,$data,'petugas');
		redirect('admin/entri');
	}

	public function tambah_k()
	{
		$this->load->view('admin/entri');
	}

	public function tambahkereta()
	{
		$ruteawal = htmlspecialchars($this->input->post('ruteawal', true));
		$ruteakhir = htmlspecialchars($this->input->post('ruteakhir', true));
		$jamberangkat = htmlspecialchars($this->input->post('jamberangkat', true));
		$jamtiba = htmlspecialchars($this->input->post('jamtiba', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'harga' => $harga
			);
		$this->m_rutekereta->input_data($data,'rutekereta');
		redirect('admin/entri');
	}

	public function hapuskereta($idrutekereta){
		$where = array('idrutekereta' => $idrutekereta);
		$this->m_rutekereta->hapus_data($where,'rutekereta');
		redirect('admin/entri');
	}

	public function edit($idrutekereta){
		$where = array('idrutekereta' => $idrutekereta);
		$data['rutekereta'] = $this->m_rutekereta->edit_data($where,'rutekereta')->result();
		$this->load->view('admin/entri',$data);
	}

	public function updatekereta(){
		$idrutekereta = $this->input->post('idrutekereta');
		$ruteawal = $this->input->post('ruteawal');
		$ruteakhir = $this->input->post('ruteakhir');
		$jamberangkat = $this->input->post('jamberangkat');
		$jamtiba = $this->input->post('jamtiba');
		$harga = $this->input->post('harga');
	 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'harga' => $harga
		);
	 
		$where = array(
			'idrutekereta' => $idrutekereta
		);
	 
		$this->m_rutekereta->update_data($where,$data,'rutekereta');
		redirect('admin/entri');
	}

	public function tambah_pe()
	{
		$this->load->view('admin/entri');
	}

	public function tambahpesawat()
	{
		$ruteawal = htmlspecialchars($this->input->post('ruteawal', true));
		$ruteakhir = htmlspecialchars($this->input->post('ruteakhir', true));
		$jamberangkat = htmlspecialchars($this->input->post('jamberangkat', true));
		$jamtiba = htmlspecialchars($this->input->post('jamtiba', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'harga' => $harga
			);
		$this->m_rutekereta->input_data($data,'rutepesawat');
		redirect('admin/entri');
	}

	public function hapuspesawat($idrutepesawat){
		$where = array('idrutepesawat' => $idrutepesawat);
		$this->m_rutepesawat->hapus_data($where,'rutepesawat');
		redirect('admin/entri');
	}

	public function updatepesawat(){
		$idrutepesawat = $this->input->post('idrutepesawat');
		$ruteawal = $this->input->post('ruteawal');
		$ruteakhir = $this->input->post('ruteakhir');
		$jamberangkat = $this->input->post('jamberangkat');
		$jamtiba = $this->input->post('jamtiba');
		$harga = $this->input->post('harga');
	 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'harga' => $harga
		);
	 
		$where = array(
			'idrutepesawat' => $idrutepesawat
		);
	 
		$this->m_rutepesawat->update_data($where,$data,'rutepesawat');
		redirect('admin/entri');
	}

	public function validation()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('admin/validation', $data);
	}

	public function report()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('admin/report', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('idlevel');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('multiuser/index');
	}	

}