<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('kategori_m','kategori');
		// check_admin();
        // $this->load->model('kategori_m');
	}

	public function index()
	{
        $query = $this->kategori->get();
		$data = array(
			'judul' => 'Kategori',
			'row' => $query->result(),
		);
		$this->template->load('template', 'kategori/kategori_data', $data);
	}
    public function edit($id){
        check_not_login();
		$query = $this->kategori->get($id);
		$data = array(
			'judul' => 'Kategori',
			'ka' => $query->result(),
		);		
		$this->template->load('template','kategori/edit_kategori',$data);	
    }
    public function proses(){
        if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
            $this->kategori->tambah_kategori($inputan);										
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('kategori')."'; </script>";
        }	else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);
            $this->kategori->edit($inputan);										
            echo "<script> alert('Data Berhasil Diubah'); </script>";		
            echo "<script>window.location='".site_url('kategori')."'; </script>";	
        }
    }
    public function del()
	{
		$id = $this->input->post('id_kategori');
		$this->kategori->del($id);
		if($this->db->affected_rows() >0 ){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('kategori')."';</script>";
	}
}
