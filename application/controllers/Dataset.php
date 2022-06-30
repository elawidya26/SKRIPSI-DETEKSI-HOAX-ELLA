<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dataset extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_dataset');
        }

        public function index(){


            $data['dataset'] = $this->M_dataset->get();

            $this->load->view('template/header');

            $this->load->view('dataset/view_dataset', $data);

            $this->load->view('template/footer');
        }    




        // view tambah dataset
        public function tambah() {

            $this->load->view('template/header');

            $this->load->view('dataset/view_dataset_tambah');

            $this->load->view('template/footer');
        }


        // proses tambah
        public function prosestambah() {

            $tabel_dataset = array(

                'penulis'           => $this->input->post('penulis'),
                'isi'               => $this->input->post('isi'),
                'tanggal_dataset'   => $this->input->post('tanggal'),
                'sumber'            => $this->input->post('sumber'),
                'label'             => $this->input->post('label'),
            );

            $this->M_dataset->insert($tabel_dataset);
            redirect('dataset/index');

        }


        public function proseshapus( $id_dataset ) {

            $this->M_dataset->delete($id_dataset);
            redirect('dataset/index');
        }




        // view update
        public function update( $id_dataset ) {

            $data['dataset'] = $this->M_dataset->getSpecificData( $id_dataset )->row_array();

            $this->load->view('template/header');
            $this->load->view('dataset/view_dataset_update', $data);
            $this->load->view('template/footer');
        }
        
        public function prosesupdate( $id_dataset ) {

            $tabel_dataset = array(

                'penulis'           => $this->input->post('penulis'),
                'isi'               => $this->input->post('isi'),
                'tanggal_dataset'   => $this->input->post('tanggal'),
                'sumber'            => $this->input->post('sumber'),
                'label'             => $this->input->post('label'),
            );

            $this->M_dataset->update($id_dataset, $tabel_dataset);
            redirect('dataset/index');
        }









        public function crawling() {

            $this->load->view('template/header');
            $this->load->view('dataset/view_crawling_tambah');
            $this->load->view('template/footer');
        }


        public function prosescrawling(){


            $keyword = $this->input->post('keyword');
            $jumlah = $this->input->post('jumlah');

            $api = "http://127.0.0.1:5000/crawling?keyword=" . $keyword.'&amount='. $jumlah;
            // $file = file_get_contents( $api );
            
            // create curl resource 
            $ch = curl_init(); 
            
             // set url
            curl_setopt($ch, CURLOPT_URL, $api); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

            // $output contains the output string 
            $file = curl_exec($ch); 

            // close curl resource to free up system resources 
            curl_close($ch); 

            $decode = json_decode( $file );

            
            if ( $decode->status ) {


                $data = array();

                foreach ( $decode->data AS $isi){

                    array_push( $data, array(

                        'penulis'   => $isi->username,
                        'isi'       => $isi->text,
                        'tanggal_dataset'   => date('Y-m-d', strtotime($isi->date)),
                        'label' => ""
                    ) );
                }

                // insert to db
                $this->M_dataset->insert_batch( $data );


                redirect('dataset/index');

            } else {

                echo "Crawling gagal !";
            }
            
            
        }
    }
    
    /* End of file Dashboard.php */
    