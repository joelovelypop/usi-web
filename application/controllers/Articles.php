<?php

//echo $mid;
defined('BASEPATH') or exit('No direct script access allowed');
class Articles extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('articles_model');
		if ($this->session->userdata('l_id') == NULL) {
			redirect('Homepage', 'refresh');
		}
	}

	//articles
	public function index()
	{
		$data['results'] = $this->articles_model->fetch_article(0, 0, '');

		$this->load->view('admin-web/header');
		$this->load->view('admin-web/mainpage', $data);
		$this->load->view('admin-web/footer');
	}

	public function newdata()
	{
		$data = array('error' => $this->upload->display_errors());

		$this->load->view('admin-web/header');
		$this->load->view('admin-web/newdata', $data);
		$this->load->view('admin-web/footer');
	}

	public function adding($value = '')
	{

		$config['upload_path'] = './aimg/'; //Folder สำหรับ เก็บ ไฟล์ที่  aimg
		$config['allowed_types'] = 'gif|jpg|png'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
		$config['max_size']     = '2000'; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		$config['max_width'] = '2000'; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		$config['max_height'] = '2000'; //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		$config['encrypt_name'] = TRUE; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน

		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('a_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
		$this->load->library('upload', $config); //**สำคัญ* */
		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้
		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่    
		if ($this->upload->display_errors()) {
			redirect('articles?act=done', 'refresh');
		} else {   // หากไม่มีข้อผิดพลาดใดๆ เกิดข้อ ก็บันทึกข้อมูลส่วนอื่นตามปกติ             	   
			$arr = array(
				'ref_mem_id' => $this->input->post('ref_mem_id'),
				'a_title' => $this->input->post('a_title'),
				'a_detail' => $this->input->post('a_detail'),
				'a_vdo' => $this->input->post('a_vdo'),
				'a_img' => $filename
			);
			$this->db->insert('tbl_article', $arr);

			redirect('articles?act=done', 'refresh');
		}
	}

	public function edit($a_id)
	{
		$data['result'] = $this->articles_model->read_article($a_id);

		$this->load->view('admin-web/header');
		$this->load->view('admin-web/edit', $data);
		$this->load->view('admin-web/footer');
	}



	public function update($value = '')
	{

		$config['upload_path'] = './aimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$config['encrypt_name'] = TRUE;
		$a_last_update = date('Y-m-d H:i:s');

		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('a_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
		$this->load->library('upload', $config);

		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่  
		if ($this->upload->display_errors()) {
			$arr1 = array(
				'a_title' => $this->input->post('a_title'),
				'a_detail' => $this->input->post('a_detail'),
				'a_vdo' => $this->input->post('a_vdo'),
				'a_last_update' => $a_last_update
			);

			$this->db->where('a_id', $this->input->post('a_id'));
			$this->db->update('tbl_article', $arr1);

			redirect('articles?act=update', 'refresh');
		} else {

			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = $this->upload->data();
			$this->load->library('image_lib');
			$config2 = array(

				"image_library" => "gd2",
				"source_image" => "./aimg/" . $data['file_name'],
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
				'a_title' => $this->input->post('a_title'),
				'a_detail' => $this->input->post('a_detail'),
				'a_last_update' => $a_last_update,
				'a_vdo' => $this->input->post('a_vdo'),
				'a_img' => $filename

			);

			$this->db->where('a_id', $this->input->post('a_id'));
			$this->db->update('tbl_article', $arr);
			redirect('articles?act=update', 'refresh');
		}
	}


	public function chk($value = '')
	{
		//print_r($_POST);
		$a_status = $_POST['a_status'];
		if ($a_status == 'show') {
			$a_s = 'hide';

			$arr = array('a_status' => $a_s);

			$this->db->where('a_id', $this->input->post('a_id'));
			$this->db->update('tbl_article', $arr);
			redirect('articles?act=update', 'refresh');
		} elseif ($a_status == 'hide') {
			$a_s = 'show';

			$arr1 = array('a_status' => $a_s);

			$this->db->where('a_id', $this->input->post('a_id'));
			$this->db->update('tbl_article', $arr1);
			redirect('articles?act=update', 'refresh');
		}
	}


	public function addimg($a_id)
	{
		$data['result'] = $this->articles_model->read_article($a_id);
		$data['rsimg'] = $this->articles_model->fetch_gall($a_id);

		$this->load->view('admin-web/header');
		$this->load->view('admin-web/addimg', $data);
		$this->load->view('admin-web/footer');
	}

	public function addimgdb()
	{
		$ref_a_id = $_POST['ref_a_id'];
		$files = $_FILES;
		$count = count($_FILES['userfile']['name']);
		for ($i = 0; $i < $count; $i++) {
			$_FILES['userfile']['name'] = time() . $files['userfile']['name'][$i];
			$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
			$config['upload_path'] = './gall/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2000000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['max_width'] = '';
			$config['max_height'] = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload();
			$fileName = $_FILES['userfile']['name'];
			$images[] = $fileName;
		}
		$data = $this->upload->data();
		$this->load->library('image_lib');
		$config = array(

			"image_library" => "gd2",
			"source_image" => "./aimg/" . $data['file_name'],
			"create_thumb" => TRUE,
			"maintain_ratio" => TRUE,
			"width" => 700,
			"heigth" => 700
		);
		$this->load->library('image_lib', $config);

		$filename = $data['file_name'];

		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		} else {
			echo $this->upload->display_errors();
		}

		$fileName = implode(',', $images);
		$this->articles_model->upload_image($this->input->post(), $fileName);
		redirect('articles/addimg/' . $ref_a_id); 
	}



	public function remove_img($value = '')
	{

		$m_id = $_GET['m_id'];
		$aid =  $_GET['aid'];
		$this->db->delete('tbl_img', array('m_id' => $m_id));
		redirect('articles/addimg/' . $aid, 'refresh');
	}


	public function confrm($a_id)
	{
		$data = array(
			'backlink'  => 'articles',
			'deletelink' => 'articles/remove/' . $a_id
		);
		

		$this->load->view('admin-web/header');
		$this->load->view('confrm', $data);
		$this->load->view('admin-web/footer');
	}

	public function remove($a_id)
	{
		$this->articles_model->remove_article($a_id);
		redirect('articles', 'refresh');
	}
}
