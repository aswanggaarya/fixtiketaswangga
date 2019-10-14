<?php 
 
class Mflight extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getruteawal()
    {
        $query = $this->db->query('SELECT distinct(ruteawal) FROM rutepesawat');
        return $query->result();
    }

    public function getruteakhir()
    {
        $query = $this->db->query('SELECT distinct(ruteakhir) FROM rutepesawat');
        return $query->result();
    }

    public function tampildata()
    {
    	return $this->db->get('rutepesawat');
    }

    public function searchrute(array $rute)
    {
    	$this->db->like('ruteawal', $rute["ruteawal"]);
    	$this->db->like('ruteakhir', $rute["ruteakhir"]);
    	$query = $this->db->get('rutepesawat');
    	return $query->result();
    }
}