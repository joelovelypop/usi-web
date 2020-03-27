<?php

//echo $mid;
defined('BASEPATH') or exit('No direct script access allowed');
class Projects extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('projects_model');
		if ($this->session->userdata('l_id') == NULL) {
			redirect('Homepage', 'refresh');
		}
	}

	//projects
	public function index()
	{
		$data['results'] = $this->projects_model->fetch_project(0, 0, '');

		$this->load->view('admin-web/header');
		$this->load->view('project/mainpage', $data);
		$this->load->view('admin-web/footer');
	}

	public function newdata()
	{
		$data = array('error' => $this->upload->display_errors());

		$this->load->view('admin-web/header');
		$this->load->view('project/newdata', $data);
		$this->load->view('admin-web/footer');
	}

	public function adding($value = '')
	{
		$pj_title = $this->input->post('pj_title');
		// num rows example
		$this->db->select('pj_title');
		$this->db->where('pj_title', $pj_title);
		$query = $this->db->get('tbl_project');
		$num = $query->num_rows();

		//echo $num;
		if ($num > 0) {
			$this->session->set_flashdata('warning', TRUE);
			redirect('projects', 'refresh');
		}

		// exit;
		$this->form_validation->set_rules('pj_title', 'ชื่อโครงการ', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE) {

			//echo 'error if';
			$data = array('error' => $this->upload->display_errors());

			$this->load->view('admin-web/header');
			$this->load->view('project/newdata', $data);
			$this->load->view('admin-web/footer');
		} else {

			//echo 'error else';


			$arr = array(
				'ref_mem_id' => $this->input->post('ref_mem_id'),
				'pj_title' => $this->input->post('pj_title'),
			);
			$this->db->insert('tbl_project', $arr);

			$this->session->set_flashdata('save_success', TRUE);
			redirect('projects', 'refresh');
		}
	}


	public function edit($pj_id)
	{
		$data['result'] = $this->projects_model->read_project($pj_id);

		$this->load->view('admin-web/header');
		$this->load->view('project/edit', $data);
		$this->load->view('admin-web/footer');
	}



	public function update($value = '')
	{
		//* หน้าแก้ไข ไม่สามารถตรวจสอบข้อมูลซ้ำได้ //

	//	$query = $this->db->get('tbl_project');
	//	$num = $query->num_rows();

		
	//	if ($num > 0) {
	//		$this->session->set_flashdata('warning', TRUE);
	//		redirect('projects', 'refresh');
	//	}

		$this->form_validation->set_rules('pj_title', 'ชื่อโครงการ', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('pj_id', 'pj_id', 'trim|required|min_length[1]');

		if ($this->form_validation->run() == FALSE) {
			$pj_id = $this->input->post('pj_id');

			$data['result'] = $this->projects_model->read_project($pj_id);

			$this->load->view('admin-web/header');
			$this->load->view('project/edit', $data);
			$this->load->view('admin-web/footer');
		} else {
			$pj_last_update = date('Y-m-d H:i:s');
			$arr = array(
				'pj_title' => $this->input->post('pj_title'),
				'pj_last_update' => $pj_last_update
			);

			$this->db->where('pj_id', $this->input->post('pj_id'));
			$this->db->update('tbl_project', $arr);
			redirect('projects?act=update', 'refresh');

			$this->session->set_flashdata('save_success', TRUE);
			redirect('project', 'refresh');
		}
	}


	public function chk($value = '')
	{
		//print_r($_POST);
		$a_status = $_POST['a_status'];
		if ($a_status == 'show') {
			$a_s = 'hide';

			$arr = array('a_status' => $a_s);

			$this->db->where('pj_id', $this->input->post('pj_id'));
			$this->db->update('tbl_project', $arr);
			redirect('projects?act=update', 'refresh');
		} elseif ($a_status == 'hide') {
			$a_s = 'show';

			$arr1 = array('a_status' => $a_s);

			$this->db->where('pj_id', $this->input->post('pj_id'));
			$this->db->update('tbl_project', $arr1);
			redirect('projects?act=update', 'refresh');
		}
	}


	public function addimg($pj_id)
	{
		$data['result'] = $this->projects_model->read_project($pj_id);
		$data['rsimg'] = $this->projects_model->fetch_gall($pj_id);

		$this->load->view('admin-web/header');
		$this->load->view('project/addimg', $data); 
		$this->load->view('admin-web/footer');
	}

	public function addimgdb()
	{

		// print_r($_POST);
		// exit;
		
		$files = $_FILES;
		$count = count($_FILES['userfile']['name']);
		for ($i = 0; $i < $count; $i++) {
			$_FILES['userfile']['name'] = time() . $files['userfile']['name'][$i];
			$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
			$config['upload_path'] = './doc_regis/';
			$config['allowed_types'] = 'txt|xls|xlsx|doc|docx|pdf';
			$config['max_size'] = '2000000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['max_width'] = '';
			$config['max_height'] = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('userfile'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
			if ($this->upload->display_errors()) {
				redirect('projects', 'refresh');
		} else {

				$ref_pj_id = $_POST['ref_pj_id'];

				$data = $this->upload->data();
				//print_r($data);
				$filename = $data['file_name'];

				$data = array(

						 
						  'ref_pj_id' => $ref_pj_id,
						  'pj_regis_doc' => $filename
						
				);

				$query = $this->db->insert('tbl_pj_regis', $data);

				if ($query) {
						echo "<script>";
						echo "alert(' เพิ่มข้อมูลสำเร็จ !');";
						echo "</script>";
						redirect('projects', 'refresh');
				} else {
						redirect('projects', 'refresh');
				}
		}
		//redirect('projects/addimg/' . $ref_pj_id);
	}
}



	public function remove_img($value = '')
	{

		$m_id = $_GET['m_id'];
		$aid =  $_GET['aid'];
		$this->db->delete('tbl_img', array('m_id' => $m_id));
		redirect('projects/addimg/' . $aid, 'refresh');
	}


	public function confrm($pj_id)
	{
		$data = array(
			'backlink'  => 'projects',
			'deletelink' => 'projects/remove/' . $pj_id
		);

		$this->load->view('admin-web/header');
		$this->load->view('confrm', $data);
		$this->load->view('admin-web/footer');
	}

	public function remove($pj_id)
	{
		$this->projects_model->remove_project($pj_id);
		redirect('projects', 'refresh');
	}
}
