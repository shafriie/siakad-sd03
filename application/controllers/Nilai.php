<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_nilai');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function index(){
		$data['nilais'] = $this->get_data();
		$this->load->view('Nilai/nilai',$data);
	}

}

