<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class M_organisasi extends CI_Model {

    public function getorganisasi()
    {
        // cara 1
        return $this->db->get('tbl_organisasi',1)->row();

        // //cara 2
        // $this->db->select('*');
        // $this->db->from('tbl_datadiri');
        // $this->db->limit('1');
        // return $this->db->get->row();

        // // cara 3
        // $query = "SELECT * FROM tbl_datadiri limit 1"
    }
}