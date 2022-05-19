<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Processing extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_processing');
        }

        public function index(){


            $data['processing'] = $this->M_processing->get();

            $this->load->view('template/header');

            $this->load->view('processing/view_processing', $data);

            $this->load->view('template/footer');
        }    




        // view tambah processing
        public function tambah() {

            $this->load->view('template/header');

            $this->load->view('processing/view_processing_tambah');

            $this->load->view('template/footer');
        }


        // proses tambah
        public function prosestambah() {

            $tabel_processing = array(

                'label_actual'           => $this->input->post('penulis'),
                'label_predict'          => $this->input->post('isi'),
                
            );

            $this->M_processing->insert($tabel_processing);
            redirect('processing/index');

        }


        public function proseshapus( $id_processing ) {

            $this->M_processing->delete($id_processing);
            redirect('processing/index');
        }




        // view update
        public function update( $id_processing ) {

            $data['processing'] = $this->M_processing->getSpecificData( $id_processing )->row_array();

            $this->load->view('template/header');

            $this->load->view('processing/view_processing_update', $data);

            $this->load->view('template/footer');
        }
        
        public function prosesupdate( $id_processing ) {

            $tabel_processing = array(

                'label_actual'           => $this->input->post('penulis'),
                'label_predict'          => $this->input->post('isi'),
            );

            $this->M_processing->update($id_processing, $tabel_processing);
            redirect('processing/index');
        }
    }
    
    /* End of file Dashboard.php */
    