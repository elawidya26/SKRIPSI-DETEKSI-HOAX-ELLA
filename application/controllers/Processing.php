<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Processing extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_processing');
        }

        public function index(){

            $data['result'] = $this->komputasi();
            
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



        public function komputasi() {

            // input get
            $threshold = $this->input->get('threshold');
            $training = $this->input->get('training');
            $testing = $this->input->get('testing');
            $fold = $this->input->get('fold');


            $api = "http://127.0.0.1:5000/processing?threshold=" . $threshold . "&training=" . $training . "&testing=". $testing ."&fold=". $fold;

            // header('Content-Type: application/json; charset=utf-8');
            
            $headers = get_headers($api);
            $res = substr($headers[0], 9, 3);


            if( empty( $threshold ) ) return [];

            if ( $res != 200 ) {

                return []; // empty


            } else {

                $file = file_get_contents( $api );
                $decode = json_decode( $file );


                if ( $decode->status ) {


                    $data = array();
    
                    // header('Content-type: application/json');
            
                    $data_json_stripe = stripslashes( $decode->data );
                    $data_decode = json_decode( $data_json_stripe );
    
                    // print_r( $data_decode );
    
                    // echo '<hr><hr>';
    
                    $total_acc = [];
                    $total_precision = [];
                    $total_recall = [];
    
                    foreach ( $data_decode AS $isi){
    
                        $kfold = $isi->kfold;
                        $akurasi = $isi->akurasi;
                        // $recall = $isi->classification_report->TRUE->recall;
                        // $precision = $isi->classification_report->TRUE->precision;
    
    
                        $total_acc[] = $akurasi;
                        $total_precision[] = $isi->precision;
                        $total_recall[] = $isi->recall;
                        
                        // data model 
                        $dt_model = array();
                        foreach ( $isi->model AS $mdl ) {
    
                            array_push( $dt_model, array(
    
                                'text'      => $mdl->text,
                                'actual'    => $mdl->actual,
                                'predict'    => $mdl->predict,
                            ) );
                        }
    
    
                        array_push( $data, array(
    
                            'kfold'     => $kfold,
                            'akurasi'   => $akurasi,
                            'model'     => $dt_model
                        ) );
    
                    }
    
    
                    return [
    
                        'data'  => $data,
                        'avg_acc'   => array_sum($total_acc)/count($total_acc),
                        'avg_precision'   => array_sum($total_precision)/count($total_precision),
                        'avg_recall'   => array_sum($total_recall)/count($total_recall),
    
                    ];
    
                } else {
    
                    return []; // empty
                    // echo "Crawling gagal !";
                }
            }

           
        }
    }
    
    /* End of file Dashboard.php */
    