<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_hoax extends CI_Controller {

    function __construct() {

        parent::__construct();
    }
    public function index()
    {
        $this->load->view('template/header');

        $this->load->view('lapor_hoax/view_lapor_hoax');
        
        $this->load->view('template/footer');
        
    }

}

/* End of file Lapor_hoax.php */
