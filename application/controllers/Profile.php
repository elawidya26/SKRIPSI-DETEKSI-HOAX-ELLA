<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct() {

        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template/header');

        $this->load->view('profile/view_profile');
        
        $this->load->view('template/footer');
        
    }

}

/* End of file Controllername.php */
