 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}	
	}

	public function index(){
		$data['kelass'] = $this->get_data();
		$this->load->view('Kelas/kelas',$data);
	}

	public function update_data()
		{
		$post = $this->input->post();
		
		$this->db->set('nama_kelas', $post['nama_kelas']);
		$this->db->set('wali_kelas', $post['wali_kelas']);
		$this->db->where('id',$post['id']);
		$this->db->update('tbl_kelas');

		if ($this->db->affected_rows() === 1 ) {
			redirect('Kelas','refresh');
		}
		else{
			redirect('Kelas','refresh');
		}
		
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_kelas');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$row['id'] = $data['id'];
		$row['nama_kelas'] = $data['nama_kelas'];
		$row['wali_kelas'] = $data['wali_kelas'];
		$this->load->view('Kelas/form_edit',$row);
	}


	public function insert_data()
	{
		$post = $this->input->post();
		$object = array(

					'nama_kelas'=>$post['nama_kelas'],
					'wali_kelas'=>$post['wali_kelas'],
			);				
		$this->db->insert('tbl_kelas', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Kelas','refresh');
		}
		else{
			redirect('Kelas','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_kelas');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_kelas');
		if ($this->db->affected_rows() === 1) {
			redirect('Kelas','refresh');
		}

	}

	public function add()
	{
		$this->load->view('Kelas/form_add');
	}

}


