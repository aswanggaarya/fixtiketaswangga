<?php 
 
class Mtrain extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        $query = $this->db->query('SELECT distinct(ruteawal) FROM rutekereta');
        return $query->result();
    }
}