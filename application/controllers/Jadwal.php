 <?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}	
	}

	public function index(){
		$data['jadwals'] = $this->get_data();
		$this->load->view('Jadwal/jadwal',$data);
	}

	public function update_data()
		{
		$post = $this->input->post();
		
		$this->db->set('nama_pelajaran', $post['nama_pelajaran']);
		$this->db->set('id_guru', $post['id_guru']);
		$this->db->set('kelas', $post['kelas']);
		$this->db->where('id',$post['id']);
		$this->db->update('tbl_jadwal');

		if ($this->db->affected_rows() === 1 ) {
			redirect('Jadwal','refresh');
		}
		else{
			redirect('Jadwal','refresh');
		}
		
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$row['id'] = $data['id'];
		$row['nama_pelajaran'] = $data['nama_pelajaran'];
		$row['id_guru'] = $data['id_guru'];
		$row['kelas'] = $data['kelas'];
		$this->load->view('Jadwal/form_edit',$row);
	}


	public function insert_data()
	{
		$post = $this->input->post();
		$object = array(

					'nama_pelajaran'=>$post['nama_pelajaran'],
					'id_guru'=>$post['id_guru'],
					'kelas'=>$post['kelas'],
			);				
		$this->db->insert('tbl_jadwal', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Jadwal','refresh');
		}
		else{
			redirect('Jadwal','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_jadwal');
		if ($this->db->affected_rows() === 1) {
			redirect('Jadwal','refresh');
		}

	}

	public function add()
	{
		$this->load->view('Jadwal/form_add');
	}

}


