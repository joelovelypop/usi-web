<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	//	$this->load->model('prdtype_model');
	}

	public function index()
	{
		$data['query'] = $this->prdtype_model->all();
		$this->load->view('site/header');
		$this->load->view('site/login_form', $data);
		$this->load->view('site/footer');
	}

	public function authen()
	{


		$this->form_validation->set_rules('mem_username', 'username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('mem_password', 'password', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('wrong_alert', TRUE);
			redirect('homepage', 'refresh');
		} else {

			$result = $this->member_model->chklogin(
				$this->input->post('mem_username'),
				sha1($this->input->post('mem_password'))
			);

			if ($result == '') {

				$this->session->set_flashdata('wrong_login', TRUE);
				redirect('homepage', 'refresh');
			}

			if (!empty($result)) {
				$sess = array(
					'mem_id'    		=> $result->mem_id,
					'l_id'    	        => $result->l_id,
					'mem_name'		    => $result->mem_name,
					'img'			    => $result->img
				);

				$this->session->set_userdata($sess);

				$l_id = $_SESSION['l_id'];

				//เช็คสิทธการใช้งาน 
				if ($l_id == 1) {
					//echo 'r u admin';
					redirect('admin', 'refresh');
				} elseif ($l_id == 2) {
					//echo 'r u boss';
					redirect('staff', 'refresh');
				}
			} else {
				$this->session->unset_userdata(array('mem_id', 'l_id', 'mem_name', 'img'));
				$this->session->set_flashdata('wrong_login', TRUE);
				redirect('homepage', 'refresh');
			}
		}
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		$this->session->unset_userdata(array('mem_id', 'l_id', 'mem_name', 'img'));
		redirect('homepage', 'refresh');
	}
}
