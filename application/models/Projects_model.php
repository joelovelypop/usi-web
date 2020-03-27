<?php

class projects_model extends CI_Model 
{

	//public $p_name;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	
		//if ($this->session->userdata('login_id') == NULL) {
		//	redirect('user/login');
        //}
	}

	public function fetch_project()
	{
		$this->db->select('a.*,m.*');
		$this->db->from('tbl_project as a');
		$this->db->join('tbl_member as m', 'm.mem_id=a.ref_mem_id');
		$this->db->order_by('a.pj_id', 'desc');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	} 



	public function read_project($pj_id){
		$this->db->select('p.*');
		$this->db->from('tbl_project as p');
		$this->db->where('p.pj_id',$pj_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function fetch_gall($pj_id)
	{
		$this->db->select('a.*');
		$this->db->from('tbl_pj_regis as a');
		$this->db->where('a.ref_pj_id',$pj_id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}


	public function upload_image($inputdata,$filename)
    {
      $ref_pj_id = $_POST['ref_pj_id'];
      if($filename!='' ){
      $filename1 = explode(',',$filename); 
      foreach($filename1 as $file){
      $file_data = array(
      'art_img' => $file,
      'ref_pj_id' =>$ref_pj_id
      );
      $this->db->insert('tbl_img', $file_data);
      }
      }
    }




	public function remove_project($pj_id){ //delete 
		$this->db->delete('tbl_project',array('pj_id'=>$pj_id));
	}



	
}
