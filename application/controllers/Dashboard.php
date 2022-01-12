<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_admin();
		check_not_login();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
     
        $data['row'] = $this->user_m->get();
		$data['judul'] = 'User';
		$this->template->load('template', 'User/dashboard' , $data);
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
			$data['judul']="User";
			$this->template->load('template', 'User/user_form_add',$data);
		}
		else{
				$post = $this->input->post(null, TRUE);
				$this->user_m->add($post);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Disimpan'); </script>";
				}
				echo "<script>window.location='".site_url('User/dashboard')."'; </script>"; 
		}
	}

	public function edit($id)
	{
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('user', 'Username', 'required|min_length[5]|callback_username_check');
		if($this->input->post('password')){
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules('confirmpassword', 'konfPassword', 'matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		}
		if($this->input->post('confirmpassword')){
			$this->form_validation->set_rules('confirmpassword', 'konfPassword', 'matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		}
		$this->form_validation->set_rules('no_hp', 'nohp', 'required');

		$this->form_validation->set_message('required' , '%s masih kosong, Silhakan isi ');
		$this->form_validation->set_message('min_length' , '%s minimal 5 karakter ');
		$this->form_validation->set_message('is_unique' , '%s Sudah dipakai,silahkan ganti ');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE){
			$query = $this->user_m->get($id);
			if($query->num_rows() >0){
				$data['row'] = $query->row();
				$data['judul']="User";
				$this->template->load('template', 'User/user_form_edit', $data);
			}else{
				echo "<script> alert('Data Tidak ditemukan');";
				echo "window.location='".site_url('dashboard')."'; </script>"; 
			}
			
		}
		else{
				$post = $this->input->post(null, TRUE);
				$this->user_m->edit($post);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Disimpan'); </script>";
				}
				echo "<script>window.location='".site_url('User/dashboard')."'; </script>"; 
		}
	} 
	function username_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user where username= '$post[user]' and id_user !='$post[id_user]' ");
		if($query->num_rows()>0){
			$this->form_validation->set_message('username_check' , '{field} Sudah dipakai , silahkan ganti !');
			return FALSE;
		}else{
			return TRUE;
		}

	}

	public function del()
	{
		$id = $this->input->post('id_user');
		$this->user_m->del($id);
		if($this->db->affected_rows() >0 ){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('dashboard')."';</script>";
	}
}
