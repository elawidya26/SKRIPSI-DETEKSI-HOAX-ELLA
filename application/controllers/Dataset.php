<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dataset extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            
        }

        public function index(){

            $this->load->view('template/header');

            $this->load->view('dataset/view_dataset');

            $this->load->view('template/footer');
        }    
    }
    
    /* End of file Dashboard.php */
    