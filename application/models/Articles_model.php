<?php

class articles_model extends CI_Model 
{

	//public $p_name;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('articles_model');
		$this->load->model('member_model');
		//if ($this->session->userdata('login_id') == NULL) {
		//	redirect('user/login');
        //}
	}

	public function fetch_article()
	{
		$this->db->select('a.*,m.*');
		$this->db->from('tbl_article as a');
		$this->db->join('tbl_member as m', 'm.mem_id=a.ref_mem_id');
		$this->db->order_by('a.a_id', 'desc');
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



	public function read_article($a_id){
		$this->db->select('p.*');
		$this->db->from('tbl_article as p');
		$this->db->where('p.a_id',$a_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function fetch_gall($a_id)
	{
		$this->db->select('a.*');
		$this->db->from('tbl_img as a');
		$this->db->where('a.ref_a_id',$a_id);
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
      $ref_a_id = $_POST['ref_a_id'];
      if($filename!='' ){
      $filename1 = explode(',',$filename); 
      foreach($filename1 as $file){
      $file_data = array(
      'art_img' => $file,
      'ref_a_id' =>$ref_a_id
      );
      $this->db->insert('tbl_img', $file_data);
      }
      }
    }




	public function remove_article($a_id){ //delete 
		$this->db->delete('tbl_article',array('a_id'=>$a_id));
	}



	
}
