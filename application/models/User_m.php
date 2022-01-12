<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post){
        $parrams['username'] = $post['user'];
        $parrams['password'] = sha1($post['password']);
        $parrams['nama'] = $post['nama'];
        $parrams['no_hp'] = $post['no_hp'];
        $parrams['level'] = $post['level'];
        $this->db->insert('user', $parrams);
    }
    public function edit($post){
        $parrams['username'] = $post['user'];
        if(!empty($post['password'])){
            $parrams['password'] = sha1($post['password']);
        }
        $parrams['nama'] = $post['nama'];
        $parrams['no_hp'] = $post['no_hp'];
        $parrams['level'] = $post['level'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $parrams);
    }
    public function del($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}