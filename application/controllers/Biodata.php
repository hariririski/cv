<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Biodata extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
         //$this->load->model('M_Jalan_rusak');
  			 $this->load->database();
  			 }


         public function index()
       	{
          // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
          // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
          // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
       		$this->load->view('Biodata');
       	}
        public function data_biodata()
       {
         // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
         // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
         // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
         $this->load->view('Data_biodata');
       }

       public function data_keahlian()
      {
        // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
        // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
        // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
        $this->load->view('data_keahlian');
      }

      public function data_pengalaman_kerja()
     {
       // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
       // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
       // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
       $this->load->view('data_pengalaman_kerja');
     }
     public function data_organisasi()
    {
      // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
      // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
      // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
      $this->load->view('data_organisasi');
    }

    public function data_lulusan()
   {
     // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
     // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
     // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
     $this->load->view('data_lulusan');
   }
   public function data_prestasi()
  {
    // $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
    // $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
    // $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
    $this->load->view('data_prestasi');
  }




   }
?>
