<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function dataPegawai(){
        $query = $this->db->get("Pegawai");
        return $query->result();
    }

    public function get_dataPegawai($id){
        $this->db->where('Pegawai_Id',$id);
        $query = $this->db->get("Pegawai");
        return $query->row();
    }
}
