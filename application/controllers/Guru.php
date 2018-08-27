<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}
	}

	public function index(){
		$data['gurus'] = $this->get_data();
		$this->load->view('Guru/guru',$data);
	}

	public function update_data()
		{
		$post = $this->input->post();
		
		$this->db->set('nip', $post['nip']);
		$this->db->set('nama', $post['nama']);
		$this->db->set('kota', $post['tempat_lahir']);
		$this->db->set('tgl_lahir', $post['tgl_lahir']);
		$this->db->set('kelamin', $post['jenis_kelamin']);
		$this->db->set('agama', $post['agama']);
		$this->db->set('alamat', $post['alamat']);
		$this->db->set('pendidikan', $post['pendidikan']);
		$this->db->set('jabatan', $post['jabatan']);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_guru');

		if ($this->db->affected_rows() === 1 ) {
			redirect('Guru','refresh');
		}
		else{
			redirect('Guru','refresh');
		}
		
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$row['id'] = $data['id'];
		$row['nip'] = $data['nip'];
		$row['nama'] = $data['nama'];
		$row['kota'] = $data['kota'];
		$row['tgl_lahir'] = $data['tgl_lahir'];
		$row['kelamin'] = $data['kelamin'];
		$row['agama'] = $data['agama'];
		$row['alamat'] = $data['alamat'];
		$row['pendidikan'] = $data['pendidikan'];
		$row['jabatan'] = $data['jabatan'];
		$this->load->view('Guru/form_edit',$row);
	}

	public function insert_data()
	{
		$post = $this->input->post();
		$object = array(

					'nip'=>$post['nip'],
					'nama'=>$post['nama'],
					'kota'=>$post['tempat_lahir'],
					'tgl_lahir'=>$post['tgl_lahir'],
					'kelamin'=>$post['jenis_kelamin'],
					'agama'=>$post['agama'],
					'alamat'=>$post['alamat'],
					'pendidikan'=>$post['pendidikan'],
					'jabatan'=>$post['jabatan'],
				);
		$this->db->insert('tbl_guru', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Guru','refresh');
		}
		else{
			redirect('Guru','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_guru');
		if ($this->db->affected_rows() === 1) {
			redirect('Guru','refresh');
		}

	}

	public function add()
	{
		$this->load->view('Guru/form_add');
	}

}


