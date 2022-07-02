<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Main extends CI_Controller {
        
        public function __construct() {

            parent::__construct();

            $this->load->model('M_lapor_hoax');
            $this->load->model('M_berita');
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
        
        
        // halaman metodologi
        public function artikel( $id_berita = null ) {


            if ( $id_berita ) {

                $data['berita'] = $this->M_berita->getSpecificData( $id_berita )->row_array();

                $this->load->view('template/user_header');
                $this->load->view('main/view_artikel_detail', $data);
                $this->load->view('template/user_footer');

            } else {

                $data['berita'] = $this->M_berita->get();

                $this->load->view('template/user_header');
                $this->load->view('main/view_artikel', $data);
                $this->load->view('template/user_footer');
            }
        }


        public function lapor() {

            $this->load->view('template/user_header');
            $this->load->view('main/view_lapor_hoax_user');
            $this->load->view('template/user_footer');
        }

        // proses simpan laporan 
        public function proseslaporan() {

            // print_r( $this->input->post() );
            $data = array(

                'judul' => $this->input->post('nama'),
                'isi'   => $this->input->post('isi'),
                'label' => $this->input->post('label'),
                'sumber'=> $this->input->post('sumber'),
                'bukti' => $this->input->post('bukti'),
                'nama'  => $this->input->post('nama'),
                'email' => $this->input->post('email'),
            );

            $this->M_lapor_hoax->insert( $data );

            $html = '<div class="alert alert-info">
                    <b>Pemberitahuan</b><br>
                    Laporan berhasil terkirim pada '.date('d F Y H.i A').' 
                </div>';
                $this->session->set_flashdata('pesan', $html);

            redirect('main/lapor');
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
    