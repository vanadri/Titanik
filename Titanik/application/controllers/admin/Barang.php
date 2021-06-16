<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_barang', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $user_id = $this->session->userdata('user_id');
      $data['list'] = $this->model->get(null, $user_id);
      $data['title'] = "Barang List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_barang_list', $data);
	}

   public function is_form(){
      $id = $this->uri->segment(4);

      $dtc = new stdClass;
      $dtc->barang_nama = '';
      $dtc->barang_qty = '';
      $dtc->barang_desk = '';
      $dtc->barang_harga = '';
      $dtc->barang_berat = '';
      $dtc->barang_satuan = '';
      $dtc->barang_foto = '';

      if(!empty($id)){
         $dtc =  $this->model->get($id);
      }

      if(isset($_POST['submit'])){
         $dtc->barang_nama = trim($this->input->post('barang_nama'));
         $dtc->barang_qty = trim($this->input->post('barang_qty'));
         $dtc->barang_desk = trim($this->input->post('barang_desk'));
         $dtc->barang_harga = trim($this->input->post('barang_harga'));
         $dtc->barang_berat = trim($this->input->post('barang_berat'));
         $dtc->barang_satuan = trim($this->input->post('barang_satuan'));
         $dtc->barang_foto = $this->upload();

         $dataIn['barang_nama'] =  $dtc->barang_nama;
         $dataIn['barang_qty'] =  $dtc->barang_qty;
         $dataIn['barang_desk'] =  $dtc->barang_desk;
         $dataIn['barang_harga'] =  $dtc->barang_harga;
         $dataIn['barang_berat'] =  $dtc->barang_berat;
         $dataIn['barang_satuan'] =  'gram';//$dtc->barang_satuan;
         $dataIn['penjual_id'] = $this->session->userdata('user_id');
         
         $is_isi = (!empty($dtc->barang_nama) &&
                    !empty($dtc->barang_desk) && 
                    !empty($dtc->barang_harga) &&
                    !empty($dtc->barang_berat) );
         // print_r($is_isi);exit;
         $succ = false;
         if(!empty($id)){
            if(!empty($dtc->barang_foto)){
               $dataIn['barang_foto'] =  $dtc->barang_foto;
            }
            $succ = $this->db->update('barang', $dataIn, array('barang_id' => $id));
         }else{
            if($is_isi){
               $dataIn['barang_foto'] =  $dtc->barang_foto;
               $succ = $this->db->insert('barang', $dataIn);
            }
         }

            if($succ){
               redirect('admin/barang');
            }
      }


      $data['title'] = "Barang Form";
      $data['dtc'] = $dtc;
      $this->template->load('tmpl/vbacktmpl', 'admin/v_barang_form', $data);
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
               $config['file_name'] = 'foto_barang_'.time();
               $image_data = array();

               $is_file_error = FALSE;
               if (!$_FILES) {
                  print_r('upload foto gagal ulangi lagi !');
                  exit;
               }
               
               if (!$is_file_error) {
                  
                  $this->upload->initialize($config);
                  
                  if (!$this->upload->do_upload('barang_foto')) {
                     
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
      $this->db->delete('barang', array('barang_id'=> $id));
      redirect('admin/barang');
   }
}
