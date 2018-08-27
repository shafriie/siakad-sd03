<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}
	}

	public function index(){
		$data['sekolahs'] = $this->get_data();
		$this->load->view('Sekolah/sekolah',$data);
	}

	public function update_data()
		{
		$post = $this->input->post();
		
		$this->db->set('nama', $post['nama']);
		$this->db->set('nss', $post['nss']);
		$this->db->set('nis', $post['nis']);
		$this->db->set('ntsn', $post['ntsn']);
		$this->db->set('skpd', $post['skpd']);
		$this->db->set('alamat', $post['alamat']);
		$this->db->set('nomor', $post['nomor']);
		$this->db->set('fax', $post['fax']);
		$this->db->set('email', $post['email']);
		$this->db->set('profile', $post['profile']);
		$this->db->set('tahun', $post['tahun']);
		$this->db->set('semester', $post['semester']);
		$this->db->where('id',$post['id']);
		
		$this->db->update('tbl_sekolah');

		$this->session->set_userdata('nama_sekolah',$post['nama']);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Sekolah','refresh');
			
		}
		else{
			redirect('Sekolah','refresh');
		}
		
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_sekolah');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$row['id'] = $data['id'];
		$row['nama'] = $data['nama'];
		$row['nss'] = $data['nss'];
		$row['nis'] = $data['nis'];
		$row['ntsn'] = $data['ntsn'];
		$row['skpd'] = $data['skpd'];
		$row['alamat'] = $data['alamat'];
		$row['nomor'] = $data['nomor'];
		$row['fax'] = $data['fax'];
		$row['email'] = $data['email'];
		$row['profile'] = $data['profile'];
		$row['tahun'] = $data['tahun'];
		$row['semester'] = $data['semester'];

		$this->load->view('Sekolah/form_edit',$row);
	}

	public function insert_data()
	{
		$post = $this->input->post();
		$object = array(

					'nama'=>$post['nip'],
					'nss'=>$post['nss'],
					'nis'=>$post['nis'],
					'ntsn'=>$post['ntsn'],
					'skpd'=>$post['skpd'],
					'alamat'=>$post['alamat'],
					'nomor'=>$post['nomor'],
					'fax'=>$post['fax'],
					'email'=>$post['email'],
					'profil'=>$post['profil'],
					'tahun'=>$post['tahun'],
					'semester'=>$post['semester'],
				);
		$this->db->insert('tbl_sekolah', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Sekolah','refresh');
		}
		else{
			redirect('Sekolah','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_sekolah');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db-b >delete('tbl_sekolah');
		if ($this->db->affected_rows() === 1) {
			redirect('Sekolah','refresh');
		}

	}

	public function add()
	{
		$this->load->view('Sekolah/form_add');
	}

}


	