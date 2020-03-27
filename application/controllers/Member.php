<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mylevel_model');
		$this->load->model('member_model');
		if ($this->session->userdata('l_id') == '') {
			redirect('home', 'refresh');
		}
	}



	public function index()
	{
		$data['rsmember'] = $this->member_model->all();

		$this->load->view('admin-web/header');
		$this->load->view('member/member_view', $data);
		$this->load->view('admin-web/footer');
	}

	public function form_add()
	{
		$data['query'] = $this->mylevel_model->all();

		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_add', $data);
		$this->load->view('admin-web/footer');
	}

	public function adding()
	{
		$mem_username = $this->input->post('mem_username');
		$mem_email = $this->input->post('mem_email');
		// num rows example
		$this->db->select('mem_username');
		$this->db->where('mem_username', $mem_username);
		$this->db->or_where('mem_email', $mem_email);
		$query = $this->db->get('tbl_member');
		$num = $query->num_rows();

		//echo $num;

		if ($num > 0) {
			$this->session->set_flashdata('warning', TRUE);
			redirect('member', 'refresh');
		}

		//exit;
		$this->form_validation->set_rules('l_id', 'l_id', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('mem_username', 'mem_username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_password', 'mem_password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_fname', 'mem_fname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_name', 'mem_name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_lname', 'mem_lname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_tel', 'mem_tel', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_email', 'Email', 'required|valid_email');


		if ($this->form_validation->run() == FALSE) {
			$data['query'] = $this->mylevel_model->all();
			$this->load->view('admin-web/header');
			$this->load->view('member/member_form_add', $data);
			$this->load->view('admin-web/footer');
		} else {
			$this->member_model->insert_member();
			$this->session->set_flashdata('save_success', TRUE);
			redirect('member', 'refresh');
		}
	}


	public function edit($mem_id)
	{
		$data['query'] = $this->mylevel_model->all();
		$data['rsmember'] = $this->member_model->read($mem_id);

		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_edit', $data);
		$this->load->view('admin-web/footer');
	}

	public function update($value = '')
	{

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$config['encrypt_name'] = TRUE;
		$a_last_update = date('Y-m-d H:i:s');

		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ img
		$this->load->library('upload', $config);

		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่  
		if ($this->upload->display_errors()) {
			$arr1 = array(
				'l_id' => $this->input->post('l_id'),
				'mem_fname' => $this->input->post('mem_fname'),
				'mem_name' => $this->input->post('mem_name'),
				'mem_lname' => $this->input->post('mem_lname'),
				'mem_email' => $this->input->post('mem_email'),
				'mem_tel' => $this->input->post('mem_tel')
			);

			$this->db->where('mem_id', $this->input->post('mem_id'));
			$this->db->update('tbl_member', $arr1);

			redirect('member', 'refresh');
		} else {

			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = $this->upload->data();
			$this->load->library('image_lib');
			$config2 = array(

				"image_library" => "gd2",
				"source_image" => "./uploads/" . $data['file_name'],
				"create_thumb" => FALSE,
				"maintain_ratio" => TRUE,
				"width" => 700,
				"heigth" => 700
			);
			$this->image_lib->initialize($config2);

			$filename = $data['file_name'];

			if (!$this->image_lib->resize()) {
				echo $this->image_lib->display_errors();
			} else {
				echo $this->upload->display_errors();
			}

			$arr = array(
				'l_id' => $this->input->post('l_id'),
				'mem_fname' => $this->input->post('mem_fname'),
				'mem_name' => $this->input->post('mem_name'),
				'mem_lname' => $this->input->post('mem_lname'),
				'mem_email' => $this->input->post('mem_email'),
				'mem_tel' => $this->input->post('mem_tel'),
				'img' => $filename
			);

			$this->db->where('mem_id', $this->input->post('mem_id'));
			$this->db->update('tbl_member', $arr);
			redirect('member', 'refresh');
		}
	}


	public function update_1()
	{

		$this->form_validation->set_rules('mem_id', 'mem_id');
		$this->form_validation->set_rules('l_id', 'l_id');
		$this->form_validation->set_rules('mem_fname', 'mem_fname');
		$this->form_validation->set_rules('mem_name', 'mem_name');
		$this->form_validation->set_rules('mem_lname', 'mem_lname');
		$this->form_validation->set_rules('mem_tel', 'mem_tel');
		$this->form_validation->set_rules('mem_email', 'Email');
		$l_id = $_SESSION['l_id'];

		if ($this->form_validation->run() == FALSE) {
			$mem_id = $this->input->post('mem_id');
			$data['rsmember'] = $this->member_model->read($mem_id);

			if ($l_id == 1) {
				$data['query'] = $this->mylevel_model->all();
			}
			$this->load->view('admin-web/header');
			$this->load->view('member/member_form_edit', $data);
			$this->load->view('admin-web/footer');
		} else {
			echo 'error';
		}
	}


	public function pwd($mem_id)
	{
		$data['query'] = $this->mylevel_model->all();
		$data['rsmember'] = $this->member_model->read($mem_id);

		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_edit_pwd', $data);
		$this->load->view('admin-web/footer');
	}

	public function update_pwd()
	{
		$this->form_validation->set_rules('mem_id', 'mem_id', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('mem_password', 'mem_password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_password2', 'Password Confirmation', 'required|matches[mem_password]');

		if ($this->form_validation->run() == FALSE) {
			$mem_id = $this->input->post('mem_id');
			$data['query'] = $this->mylevel_model->all();
			$data['rsmember'] = $this->member_model->read($mem_id);
			$this->load->view('admin-web/header');
			$this->load->view('member/member_form_edit_pwd', $data);
			$this->load->view('admin-web/footer');
		} else {
			$this->member_model->update_pwd();
			$this->session->set_flashdata('save_success', TRUE);
			$l_id = $_SESSION['l_id'];
			if ($l_id == 1) {
				redirect('member', 'refresh');
			} else {
				redirect('staff', 'refresh');
			}
		}
	}

	public function del($mem_id)
	{

		$this->member_model->delete($mem_id);
		$this->session->set_flashdata('del_success', TRUE);
		redirect('member', 'refresh');
	}
}
