<?php  

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Berita extends CI_Controller {
        
        function __construct() {

            parent::__construct();
        }

        public function index(){
            
            $this->load->view('berita/view_berita');
        }
    
    }
    
    /* End of file Login.php */