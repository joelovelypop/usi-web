<?php

class project_model extends CI_Model
{

	public $a_title;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');  //*** */
		// if ($this->session->userdata('login_id') == NULL) {
		// 	redirect('user/login');
		//       }
	}   

	public function record_count($keyword)  //ค้นหา
	{
		$this->db->like('a_title', $keyword);  //ฟิลที่จะค้นหา
		$this->db->from('tbl_article');  //ตาราง
		return $this->db->count_all_results();
	}

	public function fetch_article_all($limit, $start, $keryword)
	{
		$this->db->select('a.*,m.*');
		$this->db->from('tbl_article as a');
		$this->db->join('tbl_member as m', 'm.mem_id=a.ref_mem_id');
		$this->db->order_by('a.a_id', 'desc');
		$this->db->like('a.a_title', $keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function fetch_article()
	{
		$this->db->select('a.*,m.*');
		$this->db->from('tbl_article as a');
		$this->db->join('tbl_member as m', 'm.mem_id=a.ref_mem_id');
		$this->db->order_by('a.a_id', 'desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function fetch_article_slide1()
	{
		$this->db->select('a.*');
		$this->db->from('tbl_article as a');
		$this->db->limit('1');
		$this->db->where('a.a_status', 'show');
		$this->db->order_by('a.a_id', 'desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function fetch_index2($value = '')
	{
		$sql = "SELECT * FROM `tbl_article` ORDER BY a_id DESC LIMIT 1 OFFSET 1";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}

	public function fetch_index3($value = '')
	{
		$sql = "SELECT * FROM `tbl_article` WHERE a_status='show' ORDER BY a_id DESC LIMIT 1 OFFSET 2";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}

	public function fetch_index4($value = '')
	{
		$sql = "SELECT * FROM `tbl_article` WHERE a_status='show' ORDER BY a_id DESC LIMIT 1 OFFSET 3";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}

	public function fetch_lastnews($value = '')
	{
		$sql = "SELECT * FROM `tbl_article` WHERE a_status='show' ORDER BY a_id DESC LIMIT 12";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}

	public function fetch_hitnews($value = '')
	{
		$sql = "SELECT * FROM `tbl_article` WHERE a_status='show' ORDER BY a_view DESC LIMIT 5";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}



	public function fetch_article_slide2()
	{
		$this->db->select('a.*');
		$this->db->select_max('a.a_id');
		$this->db->select('a.*');
		$this->db->from('tbl_article as a');
		$this->db->where('a.a_status', 'show');
		$this->db->limit('2');
		$this->db->order_by('a.a_id', 'desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}



	public function read_article($a_id)
	{
		$this->db->select('a.*,m.mem_name');
		$this->db->from('tbl_article as a');
		$this->db->join('tbl_member as m', 'm.mem_id=a.ref_mem_id');
		$this->db->where('a.a_id', $a_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


	public function fetch_gall($a_id)
	{
		$this->db->select('a.*');
		$this->db->from('tbl_img as a');
		$this->db->where('a.ref_a_id', $a_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}


	public function upload_image($inputdata, $filename)
	{
		$ref_a_id = $_POST['ref_a_id'];
		if ($filename != '') {
			$filename1 = explode(',', $filename);
			foreach ($filename1 as $file) {
				$file_data = array(
					'art_img' => $file,
					'ref_a_id' => $ref_a_id
				);
				$this->db->insert('tbl_img', $file_data);
			}
		}
	}

	public function remove_article($a_id)
	{ 
		$this->db->delete('tbl_article', array('a_id' => $a_id));
	}
}
