<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class Unduh extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = base_url('api/Surat');
    
  
  }
  public function index(){   
    $this->load->library('pdf');
    $params = array('id_surat' =>  $this->uri->segment(2));
    $data['surat'] = json_decode($this->curl->simple_get($this->API,$params));
    $this->load->view('data/laporan_pdf', $data);$paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->pdf->set_paper($paper_size, $orientation);
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("Hasil Arsip.pdf", array('Attachment' => 0)); }    
 
  public function cetak(){    
    ob_start();    
    $data['surat'] =json_decode($this->curl->simple_get($this->API)); 
    $this->load->view('data/laporan_pdf', $data);    
    $html = ob_get_contents();        
    ob_end_clean();                
    require_once('./assets/html2pdf/html2pdf.class.php');    
    $pdf = new HTML2PDF('P','A4','en');    
    $pdf->WriteHTML($html);    
    $pdf->Output('Arsip laporan.pdf', 'D');  
  }

}
