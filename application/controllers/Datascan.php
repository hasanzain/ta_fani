<?php
defined('BASEPATH') or exit('No direct script allowed');

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class datascan extends REST_Controller
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
        $mac = $this->get('mac');

        if ($mac == '') {
            $kontak = $this->db->get('datascan')->result();
        } else {
            $this->db->where('mac', $mac);
            $kontak = $this->db->get('datascan')->result();
        }

        $this->response($kontak, 200);
    }

    function index_post()
    {
        $data = array(
            'mac'    =>    $this->post('mac'),
            'rssi'    =>    $this->post('rssi'),
            'source'    =>    $this->post('source'),
        );
        $insert = $this->db->insert('datascan', $data);

        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $mac = $this->put('mac');
        $source = $this->put('source');
        $data = array(
            'mac'    =>    $this->put('mac'),
            'rssi'    =>    $this->put('rssi'),
        );

        $this->db->where('mac', $mac);
        $this->db->where('source', $source);
        
        $update = $this->db->update('datascan', $data);

        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }

    function index_delete()
    {
        $mac = $this->delete('mac');

        $this->db->where('mac', $mac);

        $delete = $this->db->delete('datascan');

        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }
}