<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}
	}

	public function cek_status()
	{
		$username = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('username',$username);
		$data = $this->db->get()->row_array();
		// print_r($data['status']);
		return $data['status'];
	}

	public function index(){
		
		$this->load->view('Dashboard/dashboard');
	}

}


