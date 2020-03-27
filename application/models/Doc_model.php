<?php
class Doc_model extends CI_Model
{

        public function __construct()
        {
                parent::__construct();
        }


        public function list_doc()
        {
                $this->db->select('d.*');
                $this->db->from('tbl_doc  as d');
                // $this->db->join('tbl_doc_type as t', 'd.ref_did=t.did');
                $query = $this->db->get();
                return $query->result();
        }


        public function list_doc_emp()
        {
                $this->db->select('d.*,t.dname');
                $this->db->from('tbl_doc  as d');
                $this->db->join('tbl_doc_type as t', 'd.ref_did=t.did');
                $this->db->where('d.doc_status', '1');
                $query = $this->db->get();
                return $query->result();
        }

        public function adddocs()
        {
                $config['upload_path'] = './docs/';
                $config['allowed_types'] = 'txt|xls|xlsx|doc|docx|pdf'; //gif|jpg|png
                $config['max_size']     = '5000';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('doc_file'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
                $this->load->library('upload', $config);
                
                if ($this->upload->display_errors()) {
                        redirect('admin/down', 'refresh');
                } else {
                        $data = $this->upload->data();
                        //print_r($data);
                        $filename = $data['file_name'];
                        $data = array(

                                'doc_name' => $this->input->post('doc_name'),
                              
                                'doc_file' => $filename
                        );

                        $query = $this->db->insert('tbl_doc', $data);

                        if ($query) {
                                echo "<script>";
                                echo "alert(' เพิ่มข้อมูลสำเร็จ !');";
                                echo "</script>";
                        } else {
                                redirect('admin/down', 'refresh');
                        }
                }
        }

        public function read($doc_id)
        {
                $this->db->select('d.*');
                $this->db->from('tbl_doc as d');
                $this->db->where('d.doc_id', $doc_id);
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        public function editdocs()
        {

                $config['upload_path'] = './docs/';
                $config['allowed_types'] = 'pdf'; //gif|jpg|png
                $config['max_size']     = '5000';
                // $config['max_width'] = '3000';
                // $config['max_height'] = '3000';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
                $this->upload->do_upload('doc_file'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
                $this->load->library('upload', $config);
                if ($this->upload->display_errors()) {
                        //echo $this->upload->display_errors();
                        $data = array(
                               
                                'doc_name' => $this->input->post('doc_name'),
                                
                        );
                        $this->db->where('doc_id', $this->input->post('doc_id'));
                        $query = $this->db->update('tbl_doc', $data);

                        if ($query) {
                                echo "<script>";
                                echo "alert(' Update Ok  !');";
                                echo "</script>";
                        } else {
                                redirect('admin/down', 'refresh');
                        }
                } else {
                        $data = $this->upload->data();
                        //print_r($data);
                        $filename = $data['file_name'];


                        $data = array(
                             
                                'doc_name' => $this->input->post('doc_name'),
                               
                                'doc_file' => $filename
                        );
                        $this->db->where('doc_id', $this->input->post('doc_id'));
                        $query = $this->db->update('tbl_doc', $data);

                        if ($query) {
                                echo "<script>";
                                echo "alert(' Update Ok  !');";
                                echo "</script>";
                        } else {
                                redirect('admin/down', 'refresh');
                        }
                }
        }
}
