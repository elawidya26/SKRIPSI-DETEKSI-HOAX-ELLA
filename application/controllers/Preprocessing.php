<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Preprocessing extends CI_Controller {
    function __construct() {

        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template/header');

        $this->load->view('preprocessing/view_preprocessing');
        
        $this->load->view('template/footer');
    }

}

/*Preprocessing.php */
