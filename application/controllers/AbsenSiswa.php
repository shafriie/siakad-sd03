<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbsenSiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}
	}

	public function deleteData($id)
	{

		$explode = explode("-", $id);
		$id = $explode[0];
		$file_excel = $explode[1];

		$this->db->where('id', $id);
		$this->db->delete('tbl_absensiswa');

		if ($this->db->affected_rows() === 1) {

			$url_image = FCPATH."asset/upload/files/".$file_excel;
            unlink($url_image);
			redirect('AbsenSiswa','refresh');
		}

	}

	public function add()
	{
		$this->load->view('AbsenSiswa/form_add');
	}

	public function index(){
		$data['absens'] = $this->get_data();
		$this->load->view('AbsenSiswa/absensiswa',$data);
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_absensiswa');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function insert_data()
	{
		$post = $this->input->post();

		//declare config library upload
		$config['upload_path']      = FCPATH."asset/upload/files/";
		$config['allowed_types'] 	= 'xlsx|docx';
		// $config['max_size']  		= 1024 * 20;
		$config['encrypt_name']		= true;
		$config['overwrite']		= true;
		
		//call to library upload
		$this->load->library('upload');
		// set init config
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('dokumen')){
			
			$this->session->set_flashdata('msg',$this->upload->display_errors());

			redirect('AbsenSiswa/add','refresh');
		}
		else{

			$upload = $this->upload->data();
			$object = array(
							'bulan'=>$post['bulan'],
							'tahun'=>$post['tahun'],
							'dokumen'=>$upload['file_name'],
							'catatan'=>$post['catatan'],

						);
			$this->db->insert('tbl_absensiswa', $object);

			$this->session->set_flashdata('msg','Data successfully upload');

			redirect('AbsenSiswa/add','refresh');
		}

	}

}


