<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Klasifikasi extends CI_Controller {
        

        public function __construct() {

            parent::__construct();

        
        }

        public function index(){
            
            $this->load->view('template/header');
            $this->load->view('klasifikasi/view_klasifikasi');
            $this->load->view('template/footer');
        }



        public function pengujian() {

            $text = $this->input->get('text');
            

            $exp_text = explode(' ', $text);
            $implode = implode('-', $exp_text);

            $data = $this->klasifikasi( $implode );

            $status = false;
            if ( count( $data ) > 0 ) {

                $status = true;   
            }

            echo json_encode([

                'status'    => $status,
                'data'      => $data
            ]);
        }




        public function klasifikasi( $text ){

            $api = "http://127.0.0.1:5000/testing?text=" . $text;

            // header('Content-Type: application/json; charset=utf-8');
            
            $headers = get_headers($api);
            $res = substr($headers[0], 9, 3);

            $file = file_get_contents( $api );

            

            if ( $res != 200 ) {

                return []; // empty

                

                


            } else {

                $file = file_get_contents( $api );
                $decode = json_decode( $file );


                $data = array(

                    'text'      => $text,
                    'prediksi'  => $decode->prediksi,
                    'map'   => $decode->map
                );

                
                return $data;
            }
        }

    
    }
    
    /* End of file Klasifikasi.php */
    