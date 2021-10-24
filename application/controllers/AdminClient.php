<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = base_url('api/Surat');

    }

    public function index()
    {
            $data['title'] = "Dashboard ";
            $this->load->view('dashboard/bar');
            $this->load->view('dashboard/home', $data);
    }
    public function arsip()
    {
            $data['surat'] = json_decode($this->curl->simple_get($this->API));
            $data['title'] = "Dashboard ";
            $this->load->view('dashboard/bar');
            $this->load->view('arsip/index', $data);
    }
    public function post()
    {
            $data['title'] = "Dashboard ";
            $this->load->view('dashboard/bar');
            $this->load->view('arsip/post', $data, FALSE);
    }
    public function post_process()
    {
      $pdf_file = $_FILES['pdf_file']['name'];
  
      if ($pdf_file != '') {
        $config['upload_path'] = 'file_pdf';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config, 'pdf_file_upload');
        if ($this->pdf_file_upload->do_upload('pdf_file')) {
          $pdf_file = $this->pdf_file_upload->data('file_name');
        }
        $data = array(
          'no_surat'    => $this->input->post('no_surat'),
          'kategori'     => $this->input->post('kategori'),
          'judul'     => $this->input->post('judul'),
          'waktu'     => $this->input->post('waktu'),
          'pdf_file'      => $pdf_file,
        );
  
        $insert = $this->curl->simple_post($this->API, $data);
     
  
        if ($insert) {
          $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil Ditambahkan.</div>'
        );
          redirect('AdminClient/arsip', 'refresh');
        } else {
          echo"gagal";
            // $this->session->set_flashdata('result', '');
        }
       
        redirect('AdminClient/arsip', 'refresh');
      }
    }
    public function put()
    {
      $params = array('id_surat' => $this->uri->segment(3));
      $data['surat'] = json_decode($this->curl->simple_get($this->API, $params));
      $data['title'] = "Edit Data Arsip";
      $this->load->view('dashboard/bar');
      $this->load->view('arsip/put', $data, FALSE);
    }
    public function put_process()
    {
      $pdf_file = $_FILES['pdf_file']['name'];
      $cover = $_FILES['cover']['name'];
      $nama_buku     = $this->input->post('nama_buku');
      $diskripsi     = $this->input->post('diskripsi');
      if ($pdf_file != ''  || $cover != '' || $nama_buku != '' ||$diskripsi != '') {
        $config['upload_path'] = 'file_buku';
        $config['allowed_types'] = 'pdf';
  
        $this->load->library('upload', $config, 'pdf_file_upload');
  
        if (!is_dir(FCPATH . 'file_buku\\cover')) {
          mkdir(FCPATH . 'file_buku\\cover', 0777, true);
        }
  
        $config['upload_path'] = 'file_buku/cover';
        $config['allowed_types'] = 'jpg|png';
  
        $this->load->library('upload', $config, 'cover_upload');
  
        if ($pdf_file != '' && $this->pdf_file_upload->do_upload('pdf_file')) {
          unlink(FCPATH . 'file_buku\\' . $this->input->post('old_pdf_file'));
  
          $pdf_file = $this->pdf_file_upload->data('file_name');
        } else {
          $pdf_file = $this->input->post('old_pdf_file');
        }
  
        if ($cover != '' && $this->cover_upload->do_upload('cover')) {
          unlink(FCPATH . 'file_buku\cover\\' . $this->input->post('old_cover'));
  
          $cover = $this->cover_upload->data('file_name');
        } else {
          $cover = $this->input->post('old_cover');
        }
  
        $data = array(
          'id_buku'       => $this->input->post('id_buku'),
          'id_sekolah'    => $this->input->post('id_sekolah'),
          'nama_buku'     => $this->input->post('nama_buku'),
          'diskripsi'     => $this->input->post('diskripsi'),
          'cover'         => $cover,
          'pdf_file'      => $pdf_file,
        );
  
        $update =  $this->curl->simple_put($this->API2, $data, array(CURLOPT_BUFFERSIZE => 10));
  
        if ($update) {
            $this->session->set_flashdata(
              'message',
              '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil Diubah.</div>'
          );
        } else {
          $this->session->set_flashdata('result', 'Update Data User Gagal');
        }
  
        redirect('AdminClient/buku');
      }
    }
    public function unduh()
    {
      $params = array('id_surat' => $this->uri->segment(3));
      $data['surat'] = json_decode($this->curl->simple_get($this->API, $params));
      $data['title'] = "Edit Data Arsip";
      $this->load->view('dashboard/bar');
      $this->load->view('arsip/unduh', $data, FALSE);
    }
    public function delete()
    {
        $params = array('id_surat' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
        $this->session->set_flashdata( 'message',
        '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil Dihapus.</div>');
        } else {
        $this->session->set_flashdata('result', 'Hapus Data Gagal');
        }
        redirect('AdminClient/arsip');
    }
    public function viewpdf()
    {
      $params = array('id_surat' => $this->uri->segment(3));
      $data['surat'] = json_decode($this->curl->simple_get($this->API, $params));
      $data['title'] = "Buku Sekolah";
      $this->load->view('dashboard/bar');

      $this->load->view('arsip/viewpdf', $data);
    }
    // public function unduh(){

    //     $this->load->library('pdf');
    //     $data['surat'] = json_decode($this->curl->simple_get($this->API));
    //     $this->load->view('arsip/pdf', $data);


    //     $paper_size = 'A4';
    //     $orientation = 'potrait';
    //     $html = $this->output->get_output();
    //     $this->pdf->set_paper($paper_size, $orientation);
    //     $this->pdf->load_html($html);
    //     $this->pdf->render();
    //     $this->pdf->stream("Surat Arsip.pdf", array('Attachment' => 0));
    // }
}
?>