<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('l_id') !=2){
				redirect('Homepage','refresh');
		}
		$this->load->model('member_model');
	}

	public function index()
	{
		$mem_id=$_SESSION['mem_id'];
		$data['rsmember']=$this->member_model->read($mem_id);
	//	print_r($_SESSION); 
		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_edit',$data); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('admin-web/footer');
	}

	public function profile()
	{
		$mem_id=$_SESSION['mem_id'];
	//	echo $mem_id;
		$data['rsmember']=$this->member_model->read($mem_id);
	//	print_r($data['rsmember']);
		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_edit',$data); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('admin-web/footer');

		 
	}

	public function pwd()
	{
		$mem_id=$_SESSION['mem_id'];
	//	echo $mem_id;
		$data['rsmember']=$this->member_model->read($mem_id);
	//	print_r($data['rsmember']);
		$this->load->view('admin-web/header');
		$this->load->view('member/member_form_edit_pwd',$data); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('admin-web/footer');

		 
	}

}
