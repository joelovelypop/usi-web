<?php
//include('chklogin.php');
defined('BASEPATH') OR exit('No direct script access allowed');
class article extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');  
		$this->load->model('article_model');
		if ($this->session->userdata('l_id') == NULL) {
			redirect('Homepage', 'refresh');
		}
	}

//article
	public function index()
	{
	//	$p_id = $_SESSION['login_id'];
     //   print_r($_SESSION);
		$data['results'] = $this->article_model->fetch_article(0,0,'');
     //   echo '<pre>';
     //   print_r($data);
    //    echo '<pre>';
    //    exit;
		$this->load->view('template/backheader');
		$this->load->view('article/mainpage',$data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		//$data['rslevel'] = $this->article_model->fetch_m_level(0,0,'');

		$this->load->view('template/backheader');
		$this->load->view('article/newdata');
		$this->load->view('template/backfooter');
	}
	
public function adding($value='')
	{

      //   echo '<pre>';
     //   print_r($_POST);
    //    echo '<pre>';
     //   exit;
 
		

			$config['upload_path'] = './aimg/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			$config['encrypt_name'] = TRUE;
	
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('a_img'))
                {
                	    redirect('article?act=done', 'refresh');
                        //$error = array('error' => $this->upload->display_errors());
                        echo $this->upload->display_errors();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                	    //$this->image_lib->initialize($config);
                	    
                        
                        $data = $this->upload->data();
                       

						$this->load->library('image_lib');
						//$this->image_lib->initialize($config);
                	    $config2 = array(

                	    	"image_library" =>"gd2",
                	    	"source_image"=>"./aimg/".$data['file_name'],
                	    	"create_thumb"=>FALSE,
                	    	"maintain_ratio"=>TRUE,
                	    	"width"=>700,
                	    	"heigth"=>700
                	    );
                	    $this->image_lib->initialize($config2);

                	    $filename = $data['file_name'];

                	    if($this->image_lib->resize()){
                	    	echo $this->image_lib->display_errors();
                	    }else{
                	    	echo $this->upload->display_errors();
                	    }

                	    //exit;



                        $arr=array(
                        	    'ref_p_id'=> $this->input->post('ref_p_id'),
								'a_title'=> $this->input->post('a_title'),
								'a_detail'=> $this->input->post('a_detail'),
                                'a_vdo'=> $this->input->post('a_vdo'),
                        		'a_img'=>$filename
                        	);
                        $this->db->insert('tbl_article',$arr);

                       redirect('article?act=done', 'refresh');

                }
	}

	
	
	public function edit($a_id)
	{
		$data['result'] = $this->article_model->read_article($a_id);
     //   echo '<pre>';
      //  print_r($data);
      //  echo '<pre>';
     //   exit;

		$this->load->view('template/backheader');
		$this->load->view('article/edit',$data);
		$this->load->view('template/backfooter');
	}



	public function update($value='')
	{

   //     echo '<pre>';
     //   print_r($_POST);
     //   echo '<pre>';
    //    exit;


			$config['upload_path'] = './aimg/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			$config['encrypt_name'] = TRUE;
            $a_last_update = date('Y-m-d H:i:s');

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('a_img'))  
                {         
                        
           
                         $arr1=array(
								'a_title'=> $this->input->post('a_title'),
								'a_detail'=> $this->input->post('a_detail'),
                                'a_vdo'=> $this->input->post('a_vdo'),
                                'a_last_update'=> $a_last_update
                        	);

                         $this->db->where('a_id', $this->input->post('a_id'));
                         $this->db->update('tbl_article', $arr1);

                        redirect('article?act=update', 'refresh');

                }else{
                	$data = $this->upload->data();
                	$filename = $data['file_name'];

                	$data = $this->upload->data();
						$this->load->library('image_lib');
                	    $config2 = array(

                	    	"image_library" =>"gd2",
                	    	"source_image"=>"./aimg/".$data['file_name'],
                	    	"create_thumb"=>FALSE,
                	    	"maintain_ratio"=>TRUE,
                	    	"width"=>700,
                	    	"heigth"=>700
                	    );
                	    $this->image_lib->initialize($config2);

                	    $filename = $data['file_name'];

                	    if($this->image_lib->resize()){
                	    	echo $this->image_lib->display_errors();
                	    }else{
                	    	echo $this->upload->display_errors();
                	    }

                	$arr=array(
								'a_title'=> $this->input->post('a_title'),
								'a_detail'=> $this->input->post('a_detail'),
                                'a_last_update'=> $a_last_update,
                                'a_vdo'=> $this->input->post('a_vdo'),
                        		'a_img'=> $filename

                        	);

                         $this->db->where('a_id', $this->input->post('a_id'));
                         $this->db->update('tbl_article', $arr);
                         redirect('article?act=update', 'refresh');
                }
}


	public function chk($value='')
	{
		//print_r($_POST);
		$a_status = $_POST['a_status'];
		if($a_status=='show'){
			$a_s = 'hide';

				$arr=array('a_status'=>$a_s);

                         $this->db->where('a_id', $this->input->post('a_id'));
                         $this->db->update('tbl_article', $arr);
                         redirect('article?act=update', 'refresh');
		}elseif($a_status=='hide'){
			$a_s ='show';

			$arr1=array('a_status'=>$a_s);

                         $this->db->where('a_id', $this->input->post('a_id'));
                         $this->db->update('tbl_article', $arr1);
                         redirect('article?act=update', 'refresh');
		}

	}


public function addimg($a_id)
	{
		$data['result'] = $this->article_model->read_article($a_id);
		$data['rsimg'] = $this->article_model->fetch_gall($a_id);

		//$this->load->view('template/backheader');
		//$this->load->view('article/addimg',$data);
		//$this->load->view('template/backfooter');

		$this->load->view('admin-web/header');
		$this->load->view('admin-web/addimg', $data);
		$this->load->view('admin-web/footer');
	}


public function addimgdb(){

                $ref_a_id = $_POST['ref_a_id'];
              $files = $_FILES;
              $count = count($_FILES['userfile']['name']);
              for($i=0; $i<$count; $i++)
                {
                $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $config['upload_path'] = './gall/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '20000000';
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                //$config['max_width'] = '';
                //$config['max_height'] = '';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload();
                $fileName = $_FILES['userfile']['name'];
                $images[] = $fileName;
                }
                  $fileName = implode(',',$images);
                  //$this->welcome->upload_image($this->input->post(),$fileName);
                  $this->article_model->upload_image($this->input->post(),$fileName);
                  redirect('article/addimg/'.$ref_a_id);


}


public function remove_img($value=''){  

		$art_id = $_GET['art_id'];
		$aid =  $_GET['aid'];
		$this->db->delete('tbl_img',array('art_id'=>$art_id));
		redirect('article/addimg/'.$aid,'refresh');
	}



	public function confrm($a_id)
	{
		$data = array
		(
			'backlink'  => 'article',
			'deletelink'=> 'article/remove/' . $a_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}

	public function remove($a_id)
	{
		$this->article_model->remove_article($a_id);
		redirect('article','refresh');
	}
}