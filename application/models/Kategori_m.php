<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('kategori_soal');
        if($id != null){
            $this->db->where('id_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function tambah_kategori($data){
        $tambah_kategori = array(
            'nama_matkul' => $data['nama_matkul'],
            'semester' => $data['semester'],
        );
        $this->db->insert('kategori_soal',$tambah_kategori);
    }
    public function edit($data){
        $edit_kategori = array(
            'id_kategori' => $data['id_kategori'],
            'nama_matkul' => $data['nama_matkul'],
            'semester' => $data['semester'],
        );
        $this->db->set($edit_kategori);
        $this->db->where('id_kategori',$data['id_kategori']);
        $this->db->update('kategori_soal');
    }
    public function del($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori_soal');
    }
}