<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Faq extends CI_Controller {


        public function __construct() {

            parent::__construct();

            $this->load->model('M_faq');
        }

        public function index(){


            $ambil_data = $this->M_faq->ambil_data("faq")->result_array();
            $data['faq'] = $ambil_data;

            // detail ?
            if ( $this->input->get('id_faq') ) {

                $this->detail();
            } else {

                $this->load->view('template/header');
                $this->load->view('faq/view_faq', $data);
                $this->load->view('template/footer');
            }
        }


        // proses tambah
        public function proses_tambah(){

            $question = $this->input->post('question');
            $visible = $this->input->post('visible');

            $data = array(

                'question'  => $question, 
                'visible'   => $visible
            );

            $this->M_faq->tambah_data( "faq", $data );
            redirect('faq/index');
        }


        // proses edit
        public function proses_edit( $id_faq ) {

            $question = $this->input->post('question');
            $visible = $this->input->post('visible');

            $where = ['id_faq' => $id_faq];

            $data = array(

                'question'  => $question, 
                'visible'   => $visible
            );

            $this->M_faq->ubah_data( "faq", $where, $data );
            redirect('faq/index');
        }


        // proses hapus
        public function proses_hapus( $id_faq ) {

            $where = ['id_faq' => $id_faq];
            $this->M_faq->hapus_data( "faq_detail", $where );
            $this->M_faq->hapus_data( "faq", $where );
            redirect('faq/index');
        }


        


        // detail faq 
        public function detail() {

            $id_faq = $this->input->get('id_faq');

            $where = ['id_faq' => $id_faq];

            $faq_info = $this->M_faq->ambil_data_berdasarkan("faq", $where);

            $faq_all_detail = $this->M_faq->ambil_data_berdasarkan("faq_detail", $where);
            $faq_all = $this->M_faq->ambil_data("faq")->result_array();


            $data['faq'] = $faq_all;
            $data['faq_info']  = $faq_info->row_array();
            $data['faq_detail']= $faq_all_detail;

            $this->load->view('template/header');
            $this->load->view('faq/view_faq', $data);
            $this->load->view('template/footer');
        }








        /**
         *  Detail FAQ
         */

        public function proses_tambah_detail( $id_faq ) {

            $data = array(

                'id_faq'    => $id_faq,
                'answer'    => $this->input->post('answer')
            );
            
            $this->M_faq->tambah_data( "faq_detail", $data );
            redirect('faq/index?id_faq='. $id_faq);
        }


        public function proses_hapus_detail( $id_faq, $id_faq_detail ) {

            $where = ['id_faq_detail' => $id_faq_detail];
            $this->M_faq->hapus_data( "faq_detail", $where );

            redirect('faq/index?id_faq='. $id_faq);
        }


        public function proses_ubah_detail( $id_faq, $id_faq_detail ) {

            $where = ['id_faq_detail' => $id_faq_detail];
            $data = array(

                'answer'    => $this->input->post('answer')
            );
            
            $this->M_faq->ubah_data( "faq_detail", $where, $data );
            redirect('faq/index?id_faq='. $id_faq);
        }
    
    }
    
    /* End of file Faq.php */
    