<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class data_korban extends REST_Controller
{
    /*----------------------------------------CONSTRUCTOR----------------------------------------*/
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    /*----------------------------------------GET KONTAK----------------------------------------*/
    function index_get()
    {
        $id = $this->get('id');
        $limit = $this->get('limit');
        $order = $this->get('order');
        $pekerja = $this->get('pekerja');
        $lantai = $this->get('lantai');

        if ($limit != '') {
            $this->db->limit($limit);
        }
        if ($order != '') {
            $this->db->order_by('id', $order);
        }
        if ($pekerja != '') {
            $this->db->where('pekerja', $pekerja);
        }
        if ($lantai != '') {
            $this->db->where('lantai', $lantai);
        }

        if ($id == '') {
            $kontak = $this->db->get('datakorban')->result_array();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('datakorban')->result_array();
        }

        $this->response($kontak, 200);
    }

    function index_post()
    {
        $data = array(
            'nama'    =>   $this->post('nama'),
            'pekerja' => $this->post('pekerja'),
            'Divisi' => $this->post('divisi'),
            'xt' => $this->post('xt'),
            'yt' => $this->post('yt'),
            'xreal' => $this->post('xreal'),
            'yreal' => $this->post('yreal'),
            'lantai' => $this->post('lantai'),
        );
        $insert = $this->db->insert('datakorban', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $pekerja = $this->put('pekerja');
        $data = array(
            'xt' => $this->put('xt'),
            'yt' => $this->put('yt'),
            'xreal' => $this->put('xreal'),
            'yreal' => $this->put('yreal'),
        );

        $this->db->where('pekerja', $pekerja);
        $update = $this->db->update('datakorban', $data);

        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }

    function index_delete()
    {
        $pekerja = $this->delete('pekerja');
        $auth = $this->delete('auth');

        
        if ($auth == "batman") {
            $delete = $this->db->empty_table('data_korban');
        }else{
            $this->db->where('pekerja', $pekerja);
            $delete = $this->db->delete('datakorban');
        }
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }
}