<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function __construct()
    {
	    parent:: __construct();
	    $this->load->model('mflight');
	    $this->load->model('mtrain');
	    //ini digunakan untuk dapat mengakses model mflight
    }

	public function flights()
	{
		$data['penumpang'] = $this->db->get_where('penumpang', ['username' => $this->session->userdata('username')])->row_array();
		$data['ruteawal'] = $this->mflight->getruteawal();
		$data['ruteakhir'] = $this->mflight->getruteakhir();
		

		$this->load->view('user/flights', $data);
	}

	public function listflight()
	{
		$data['penumpang'] = $this->db->get_where('penumpang', ['username' => $this->session->userdata('username')])->row_array();
		$ruteawal = $this->input->get('ruteawal');
		$ruteakhir = $this->input->get('ruteakhir');
		$getruteawal = $this->mflight->getruteawal();
		$getruteakhir = $this->mflight->getruteakhir();
		$rute = [
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
		];
		$data['rutepesawat'] = $this->mflight->searchrute($rute);

		$this->load->view('user/listflight', $data);
	}

	public function trains()
	{
		$data['penumpang'] = $this->db->get_where('penumpang', ['username' => $this->session->userdata('username')])->row_array();
		$data['ruteawal'] = $this->mtrain->get();
		

		$this->load->view('user/trains', $data);
	}

}