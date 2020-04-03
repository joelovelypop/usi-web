<?php
defined('BASEPATH') or exit('No direct script access allowed');
echo "Jane Hello World";
class Homepage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('article_model');
		$this->load->model('doc_model');

		
	}

 
	private function c_view() 
	{
		$c_ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO  tbl_counter 
		(c_ip)
		VALUES
		('$c_ip')";
		$this->db->query($sql);
	}


	public function index()
	{
		$this->c_view(); 
		$data['result'] = $this->article_model->fetch_article_slide1(0,0,'');
		$data['result1'] = $this->article_model->fetch_index2();
		$data['result2'] = $this->article_model->fetch_index3();
		$data['result3'] = $this->article_model->fetch_index4();
		$data['relastnews'] = $this->article_model->fetch_lastnews();
		$data['rshit'] = $this->article_model->fetch_hitnews();

		$this->load->view('site/header'); 
		$this->load->view('site/main', $data);     
		$this->load->view('site/footer');
	}


	public function down()
	{
	
		$data['query'] = $this->doc_model->list_doc();

		$this->load->view('site/header'); 
		$this->load->view('site/list_doc', $data); 
		$this->load->view('site/footer');
	}

	public function all()
	{
		$config = array();
		$config['base_url'] = base_url('homepage/all');
		$config['total_rows'] = $this->article_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 9 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['relastnews'] = $this->article_model->fetch_article_all($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];

		//$data['relastnews'] = $this->article_model->fetch_article_all();
		$data['rshit'] = $this->article_model->fetch_hitnews();

			
		$this->load->view('site/header'); 
		$this->load->view('site/all_news', $data);   
		$this->load->view('site/footer');


	}

	private function update_view($a_id)
	{
		$sql="UPDATE tbl_article SET a_view = a_view +1 WHERE a_id = $a_id";
        $this->db->query($sql);
	}

	public function scoop($a_id)
	{
		$this->update_view($a_id);
		$data['result'] = $this->article_model->read_article($a_id);
		$data['rshit'] = $this->article_model->fetch_hitnews();
		$data['rsgall'] = $this->article_model->fetch_gall($a_id);

		
		$this->load->view('site/header'); 
		//$this->load->view('site/seo',$data);
		$this->load->view('site/detail', $data);   
		$this->load->view('site/footer'); 

	}
 

}
