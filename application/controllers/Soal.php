<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('soal_m','soal');
        $this->load->model('kategori_m','kategori');
        $this->load->helper('url');
        
		// check_admin();
        // $this->load->model('kategori_m');
	}

	public function index()
	{
        $query = $this->soal->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
        
		$this->template->load('template', 'soal/soal', $data);
	}
    public function tambah_Soal(){
        $query = $this->kategori->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
		$this->template->load('template', 'soal/tambah_soal', $data);
    }
    public function process(){
        if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 2048;
            $config['file_name']        = 'item-'.date('ymd');
            $this->load->library('upload',$config);
            if (@_FILES['file']['name'] != null){
                if($this->upload->do_upload('file')){
                    $inputan['file'] = $this->upload->data('file_name');
                    $this->soal->tambah_soal($inputan);										
                        echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
                        echo "<script>window.location='".site_url('soal')."'; </script>";
                }
            } else {
                $post['file'] = null ;
                $inputan['file'] = $this->upload->data('file_name');
                    $this->soal->tambah_soal($inputan);										
                        echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
                        echo "<script>window.location='".site_url('soal')."'; </script>";
            }
            
           
        }	else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);
            $this->soal->edit($inputan);										
            echo "<script> alert('Data Berhasil Diubah'); </script>";		
            echo "<script>window.location='".site_url('soal')."'; </script>";	
        }
    }

    public function download($id){
        $fileinfo = $this->soal->download($id);
        $download = 'upload/'.$fileinfo['file'];
        force_download($download, NULL);
    }

}