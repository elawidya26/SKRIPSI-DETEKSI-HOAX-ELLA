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
        
        
        // halaman faq
        public function faq() {

            $this->load->model('M_faq');

            $data_faq = array();
            
            $ambil_data = $this->M_faq->ambil_data("faq")->result_array();
            
            foreach ( $ambil_data AS $faq ) {

                $id_faq = $faq['id_faq'];

                $where = ['id_faq' => $id_faq];
                $faq_all_detail = $this->M_faq->ambil_data_berdasarkan("faq_detail", $where)->result_array();

                array_push( $data_faq, array(

                    'info'  => $faq,
                    'detail'=> $faq_all_detail
                ) );
            }
            
            
            $data['faq'] = $data_faq;
        

            $this->load->view('template/user_header');
            $this->load->view('main/view_faq', $data);
            $this->load->view('template/user_footer');
        }
    
    }
    
    /* End of file Main.php */
    