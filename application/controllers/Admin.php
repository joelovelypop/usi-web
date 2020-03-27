<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mylevel_model');
		$this->load->model('member_model');
		$this->load->model('doc_model');

		if ($this->session->userdata('l_id') != 1) {
			redirect('Homepage', 'refresh');
		}
	}

	public function index()
	{
		$data['rsmember'] = $this->member_model->all();
		$this->load->view('admin-web/header');
		$this->load->view('member/member_view', $data);
		$this->load->view('admin-web/footer');
	}

	//------download-------/
	public function down()
	{
		//print_r($_SESSION);
		$data['query'] = $this->doc_model->list_doc();

		$this->load->view('admin-web/header');
		$this->load->view('download/list_doc', $data);
		$this->load->view('admin-web/footer');
	}


	public function adding_down()
	{


		$this->load->view('admin-web/header');
		$this->load->view('download/formaddDoc');
		$this->load->view('admin-web/footer');
	}

	public function adddoc_down()
	{
		$this->doc_model->adddocs();
		redirect('admin/down', 'refresh');
	}


	public function edit_down($doc_id)
	{

		$data['rsedit'] = $this->doc_model->read($doc_id);


		$this->load->view('admin-web/header');
		$this->load->view('download/formEditDoc', $data);
		$this->load->view('admin-web/footer');
	}


	public function editdoc_down()
	{
		$this->doc_model->editdocs();
		redirect('admin/down', 'refresh');
	}
 
	//------END download-------/

	public function logout()
	{
		$this->session->unset_userdata(array('mem_id','l_id','mem_name'));
		redirect('homepage', 'refresh');
	}
}
