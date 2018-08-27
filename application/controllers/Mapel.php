 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login_first')) {
			redirect('login','refresh');
		}	
	}

	public function index(){
		$data['mapels'] = $this->get_data();
		$this->load->view('Mapel/mapel',$data);
	}

	public function update_data()
		{
		$post = $this->input->post();
		
		$this->db->set('nama_pelajaran', $post['nama_pelajaran']);
		$this->db->set('kkm', $post['kkm']);
		$this->db->where('id',$post['id']);
		$this->db->update('tbl_pelajaran');

		if ($this->db->affected_rows() === 1 ) {
			redirect('Mapel','refresh');
		}
		else{
			redirect('Mapel','refresh');
		}
		
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_pelajaran');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$row['id'] = $data['id'];
		$row['nama_pelajaran'] = $data['nama_pelajaran'];
		$row['kkm'] = $data['kkm'];
		$this->load->view('Mapel/form_edit',$row);
	}


	public function insert_data()
	{
		$post = $this->input->post();
		$object = array(

					'nama_pelajaran'=>$post['nama_pelajaran'],
					'kkm'=>$post['kkm'],
			);				
		$this->db->insert('tbl_pelajaran', $object);

		if ($this->db->affected_rows() === 1 ) {
			redirect('Mapel','refresh');
		}
		else{
			redirect('Mapel','refresh');
		}
		
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_pelajaran');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_pelajaran');
		if ($this->db->affected_rows() === 1) {
			redirect('Mapel','refresh');
		}

	}

	public function add()
	{
		$this->load->view('Mapel/form_add');
	}

}


