<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Surat extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_surat');
        if ($id == '') {
            $surat = $this->db->get('surat')->result_array();
        } else {
            $this->db->where('id_surat', $id);
            $surat = $this->db->get('surat')->result_array();
        }
        $this->response($surat, 200);
    }
    function index_post()
    {
        $data = array(
            'no_surat'         => $this->post('no_surat'),
            'kategori'         => $this->post('kategori'),
            'judul'         => $this->post('judul'),
            'waktu'         => $this->post('waktu'),
            'pdf_file'         => $this->post('pdf_file'),
        );
        $insert = $this->db->insert('surat', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_surat');
        $data = array(
            'no_surat'              => $this->put('no_surat'),
            'kategori'              => $this->put('kategori'),
            'judul'         => $this->put('judul'),
            'waktu'         => $this->put('waktu'),
            'pdf_file'         => $this->put('pdf_file'),
        );
        $this->db->where('id_surat', $id);
        $update = $this->db->update('surat', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_surat');
        $this->db->where('id_surat', $id);
        $delete = $this->db->delete('surat');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
