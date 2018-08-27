<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('login_first')) {
			redirect('dashboard','refresh');
		}
	}
	
	public function index()
	{
		$data['judul'] = $this->get_data_sekolah();
	$this->load->view('Login/login',$data);
	}

	public function get_data_sekolah(){
		$this->db->select('nama');
		$this->db->from('tbl_sekolah');
		$this->db->limit(1);
		$data = $this->db->get()->row_array();
		return $data['nama'];
		// print_r($data);\
	}

	public function validate_login()
	{
		$post = $this->input->post();

		if ($post['username'] == "" OR $post['password'] == "" ){
			$this->session->set_flashdata('msg','Username or Password empty !!');
			redirect('login','refresh');
		}
		else
		{
			$this->db->select('*');
			$this->db->from('tbl_login');
			$this->db->where('username',$post['username']);
			$this->db->where('password',$post['password']);
			$data = $this->db->get()->row_array();
			$num_rows = count($data);

			if ($num_rows > 0) 
			{
				$nama_sekolah = $this->get_data_sekolah();
				$this->session->set_userdata('login_first','true');
				$this->session->set_userdata('nama_lengkap',$data['nama']);
				$this->session->set_userdata('username',$data['username']);
				$this->session->set_userdata('status',$data['status']);
				$this->session->set_userdata('nama_sekolah',$nama_sekolah);
				redirect('dashboard','refresh');
			}

			else
			{
				$this->session->set_flashdata('msg','Username or Password invalid !!');
				redirect('login','refresh');
			}	
		}
		

	}

}


