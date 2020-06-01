<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function index()
    {
        $this->db->where('lantai', 'lt4');
        $data = array(
            'data_korban' => $this->db->get('datakorban')
         );
        
        $this->load->view('header/header');
        $this->load->view('dashboard',$data);
        $this->load->view('header/footer');
        
    }

    public function tes()
    {
        $data = array(
            'tesdata' => $this->db->get('datakorban'));
        $this->load->view('tes', $data);
        
    }

}

/* End of file Controllername.php */