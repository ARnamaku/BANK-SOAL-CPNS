<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}
	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	public function add()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('user', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('confirmpassword', 'konfPassword', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_rules('no_hp', 'nohp', 'required');

		$this->form_validation->set_message('required' , '%s masih kosong, Silhakan isi ');
		$this->form_validation->set_message('min_length' , '%s minimal 5 karakter ');
		$this->form_validation->set_message('is_unique' , '%s Sudah dipakai,silahkan ganti ');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('register');
		}
		else{
				$post = $this->input->post(null, TRUE);
				$this->user_m->add($post);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Disimpan'); </script>";
				}
				echo "<script>window.location='".site_url('auth/login')."'; </script>"; 
		}
	}
	public function process()
	{	
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0 ){
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat , Anda berhasil login');
					window.location='".site_url('soal')."';
				</script>";
			}else{
				echo "<script>
					alert('Login Gagal , Silahkan ulang');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}

	}

	public function logout(){
		$params = array('id_user', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
