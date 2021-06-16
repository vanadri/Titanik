<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_artikel', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "Artikel List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_artikel_list', $data);
	}

   public function is_form(){
      $id = $this->uri->segment(4);

      $dtc = new stdClass;
      $dtc->artikel_judul = '';
      $dtc->artikel_isi = '';
      $dtc->artikel_foto = '';

      if(!empty($id)){
         $dtc =  $this->model->get($id);
      }

      if(isset($_POST['submit'])){
         $dtc->artikel_judul = trim($this->input->post('artikel_judul'));
         $dtc->artikel_isi = trim($this->input->post('artikel_isi'));
         $dtc->artikel_foto = $this->upload();;

         $dataIn['artikel_judul'] =  $dtc->artikel_judul;
         $dataIn['artikel_isi'] =  $dtc->artikel_isi;

         

         $is_isi = (!empty($dtc->artikel_judul) && !empty($dtc->artikel_isi)) && !empty($dtc->artikel_foto);
         // print_r($is_isi);exit;
         $succ = false;
         if(!empty($id)){
            if(!empty($dtc->artikel_foto)){
               $dataIn['artikel_foto'] =  $dtc->artikel_foto;
            }
            $succ = $this->db->update('artikel', $dataIn, array('artikel_id' => $id));
         }else{
            if($is_isi){
               $dataIn['artikel_foto'] =  $dtc->artikel_foto;
               $dataIn['artikel_tgl'] =  date('Y-m-d H:i:s');
               $succ = $this->db->insert('artikel', $dataIn);
            }
         }

            if($succ){
               redirect('admin/artikel');
            }
      }


      $data['title'] = "Artikel Form";
      $data['dtc'] = $dtc;
      $this->template->load('tmpl/vbacktmpl', 'admin/v_artikel_form', $data);
   }

      public function upload() {
               $this->load->library('upload');
               $time = date('Y-m-dh:m');
               $item_id = "GBR";
               $upload_path = './assets/upload/';
               $config['upload_path'] = $upload_path;
               $config['allowed_types'] = 'jpg|png|gif|jpeg';
               $config['max_size'] = '0';
               $config['overwrite'] = true;
               $config['max_filename'] = '255';
               $config['file_name'] = 'foto_artikel_'.time();
               $image_data = array();

               $is_file_error = FALSE;
               if (!$_FILES) {
                  print_r('upload foto gagal ulaingi lagi !');
                  exit;
               }
               
               if (!$is_file_error) {
                  
                  $this->upload->initialize($config);
                  
                  if (!$this->upload->do_upload('artikel_foto')) {
                     
                     // $this->handle_error($this->upload->display_errors());
                     $is_file_error = TRUE;
                  } else {
                     
                     $image_data = $this->upload->data();
                  }
               
                  if ($is_file_error) {
                     if ($image_data) {
                        $file = $upload_path . $image_data['file_name'];
                        if (file_exists($file)) {
                              unlink($file);
                        }
                     }
                  } else {
                     $data['resize_img'] = $upload_path . $image_data['file_name'];
                     // $this->handle_success('Image was successfully uploaded to direcoty <strong>' . $upload_path . '</strong> and resized.'.$image_data['file_name'].'');
                  }
               }

         $image  =  $this->upload->file_name;
         return $image;
      }

   function is_delete(){
      $id = $this->uri->segment(4);
      $this->db->delete('artikel', array('artikel_id'=> $id));
      redirect('admin/artikel');
   }
}
