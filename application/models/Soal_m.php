<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_m extends CI_Model
{
    public function get()
    {
        
        $this->db->from('soal');
        $this->db->join('user','user.id_user = soal.id_user');   
        $this->db->join('kategori_soal','kategori_soal.id_kategori = soal.id_kategori');  
        $query = $this->db->get();
        return $query;
    }
    public function tambah_soal($data){
        $tambah_kategori = array(
            'id_user' => $data['iduser'],
            'id_kategori' => $data['id_kategori'],
            'tanggal_upload' => $data['tanggal_upload'],
            'nama_dosen' => $data['nama_dosen'],
            'tahun_ujian' => $data['tahun'],
            'jenis' => $data['jenis'],
            'file' => $data['file'],
        );
        $this->db->insert('soal',$tambah_kategori);
    }

    public function download($id){
        $query = $this->db->get_where('soal',array('id_soal'=>$id));
        return $query->row_array();
    }

}