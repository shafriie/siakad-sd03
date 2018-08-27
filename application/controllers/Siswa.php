<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
		 redirect('login','refresh');
		}
	}

	public function detailData()
	{
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('status',2);
		$this->db->where('id',$id);
		$data = $this->db->get()->row_array();
		echo json_encode($data);
	}

	public function index(){
		$data['siswas'] = $this->get_data();
		$this->load->view('Siswa/siswa',$data);
	}

	public function update_data()
	{
		$post = $this->input->post();
		$this->db->set('username',$post['username']);
		$this->db->set('password',$post['password']);
		$this->db->set('nama',$post['nama']);
		$this->db->set('nisn',$post['nisn']);
		$this->db->set('tempat_lahir',$post['tempat_lahir']);
		$this->db->set('tgl_lahir',$post['tgl_lahir']);
		$this->db->set('kelamin',$post['kelamin']);
		$this->db->set('agama',$post['agama']);
		$this->db->set('status',$post['status']);
		$this->db->set('alamat_siswa',$post['alamat_siswa']);
		$this->db->set('kelas',$post['kelas']);
		$this->db->set('ayah',$post['ayah']);
		$this->db->set('ibu',$post['ibu']);	
		$this->db->set('alamatortu',$post['alamatortu']);
		$this->db->set('hportu',$post['hportu']);
		$this->db->set('pekerjaanayah',$post['pekerjaanayah']);
		$this->db->set('pekerjaanibu',$post['pekerjaanibu']);
		$this->db->set('wali',$post['wali']);
		$this->db->set('alamatwali',$post['alamatwali']);
		$this->db->set('hpwali',$post['hpwali']);	
		$this->db->set('pekerjaanwali',$post['pekerjaanwali']);	
		$this->db->where('id',$post['id']);
		$this->db->update('tbl_login');
		
		if ($this->db->affected_rows() === 1 ) {
			redirect('Siswa','refresh');
		}
		else{
			redirect('Siswa','refresh');
		}
	
}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('status', 2);
		$this->db->where('id',$id);
		
		$data = $this->db->get()->row_array();
		
		$row['id'] = $data['id'];
		$row['username'] = $data['username'];
		$row['password'] = $data['password'];
		$row['nama'] = $data['nama'];
		$row['nisn'] = $data['nisn'];
		$row['tempat_lahir'] = $data['tempat_lahir'];
		$row['tgl_lahir'] = $data['tgl_lahir'];
		$row['kelamin'] = $data['kelamin'];
		$row['agama'] = $data['agama'];
		$row['status'] = $data['status'];
		$row['alamat_siswa'] = $data['alamat_siswa'];
		$row['kelas'] = $data['kelas'];
		$row['ayah'] = $data['ayah'];
		$row['ibu'] = $data['ibu'];
		$row['alamatortu'] = $data['alamatortu'];
		$row['hportu'] = $data['hportu'];
		$row['pekerjaanayah'] = $data['pekerjaanayah'];
		$row['pekerjaanibu'] = $data['pekerjaanibu'];
		$row['wali'] = $data['wali'];
		$row['alamatwali'] = $data['alamatwali'];
		$row['hpwali'] = $data['hpwali'];
		$row['pekerjaanwali'] = $data['pekerjaanwali'];

		$this->load->view('Siswa/form_edit',$row);
	}	
	
		public function insert_data()
		
		{
		
			$post = $this->input->post();
			$object = array(
					'username'=>$post['username'],
					'password'=>$post['password'],
					'nama'=>$post['nama'],
					'nisn'=>$post['nisn'],
					'tempat_lahir'=>$post['tempat_lahir'],
					'tgl_lahir'=>$post['tgl_lahir'],
					'kelamin'=>$post['kelamin'],
					'agama'=>$post['agama'],
					'status'=>$post['status'],
					'alamat_siswa'=>$post['alamat_siswa'],
					'kelas'=>$post['kelas'],
					'ayah'=>$post['ayah'],
					'ibu'=>$post['ibu'],
					'alamatortu'=>$post['alamatortu'],
					'hportu'=>$post['hportu'],
					'pekerjaanayah'=>$post['pekerjaanayah'],
					'pekerjaanibu'=>$post['pekerjaanibu'],
					'wali'=>$post['wali'],
					'alamatwali'=>$post['alamatwali'],
					'hpwali'=>$post['hpwali'],
					'pekerjaanwali'=>$post['pekerjaanwali'],
					'status'=>2,
				);
		$this->db->insert('tbl_login', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Siswa','refresh');
		}
		else{
			redirect('Siswa','refresh');
		}
		
	}


	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('status', 2);
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_login');
		if ($this->db->affected_rows() === 1) {
			redirect('Siswa','refresh');
		}

	}
	public function add()
	{
		$this->load->view('Siswa/form_add');
	}

}