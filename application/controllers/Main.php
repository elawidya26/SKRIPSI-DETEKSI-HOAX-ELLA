<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Main extends CI_Controller {
        
        public function __construct() {

            parent::__construct();
        }

        public function index(){
            
            $this->load->view('template/user_header');
            $this->load->view('main/view_penelitian');
            $this->load->view('template/user_footer');
        }




        // halaman metodologi
        public function metodologi() {

            $this->load->view('template/user_header');
            $this->load->view('main/view_metodologi');
            $this->load->view('template/user_footer');
        }
    
    }
    
    /* End of file Main.php */
    