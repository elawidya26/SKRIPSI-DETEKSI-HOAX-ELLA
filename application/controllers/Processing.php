<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Processing extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_processing');
        }

        public function index(){

            $data['result'] = $this->visual();

                    
            $this->load->view('template/header');
            $this->load->view('processing/view_processing', $data);
            $this->load->view('template/footer');
        }    




        public function visual() {

            $hasil = array();
            $ambilHasil = $this->db->get('processing');

            if ( $ambilHasil->num_rows() > 0 ) {

                $isi = $ambilHasil->row_array();
                // header('Content-type: application/json');
            
                // $data_json_stripe = stripslashes( $isi['dt_testing'] );
                $cleaning = str_replace("\\n", "", $isi['dt_testing']);
                
                $cleaning = str_replace("\'","'",$cleaning); // remove only slash
                $cleaning = stripslashes($cleaning); // remove only slash
                $cleaning = stripslashes($cleaning); // remove only slash
                $cleaning = stripslashes($cleaning); // remove only slash
                $cleaning = str_replace('"[', "[", $cleaning);
                $cleaning = str_replace(']"', "]", $cleaning);
                $cleaning = str_replace('"{', "{", $cleaning);
                $cleaning = str_replace('}"', "}", $cleaning);

                

                $decode = json_decode( $cleaning );


                // echo '<hr><hr>';

                $total_acc = [];
                $total_precision = [];
                $total_recall = [];

                $data = [];


                if ( $decode->status == true ) {

                    foreach ( $decode->data AS $isi ) {

                        $kfold = $isi->kfold;
                        $akurasi = $isi->akurasi;
                        $precision = $isi->precision;
                        $recall = $isi->recall;
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
                            'precision' => $precision,
                            'recall' => $recall,
                            'model'     => $dt_model,
                            'TP' => $isi->TP,
                            'TN' => $isi->TN,
                            'FN' => $isi->FN,
                            'FP' => $isi->FP,

                            'train' => $isi->train,
                            'test'  => $isi->test
                        ) );
                    }

                }

                




                $hasil = [

                    'data'  => $data,
                    'avg_acc'   => array_sum($total_acc)/count($total_acc),
                    'avg_precision'   => array_sum($total_precision)/count($total_precision),
                    'avg_recall'   => array_sum($total_recall)/count($total_recall),

                ];


                
            }


            return $hasil;
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



        public function do_processing() {

            $this->db->where('name', "processing")->update("scheduling", ['status' => 1]);

             // input get
            $threshold = $this->input->get('threshold');
            $training = $this->input->get('training');
            $testing = $this->input->get('testing');
            $fold = $this->input->get('fold');
    
            $api = "http://127.0.0.1:5000/processing";
            $api = "http://127.0.0.1:5000/processing/" . ($training / 100) . "/" . ($testing / 100) . "/". $threshold ."/". $fold;
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
    
            $html = '<div class="alert alert-info">
                <b>Pemberitahuan</b><br>
                Sedang menjalankan proses Processing pada latar belakang, periksa notifikasi untuk melihat status terkini 
            </div>';
            $this->session->set_flashdata('pesan', $html);
            redirect('processing/index?threshold='.$threshold.'&training='.$training.'&testing='.$testing.'&fold='. $fold);
        }



        public function komputasi() {

            // input get
            $threshold = $this->input->get('threshold');
            $training = $this->input->get('training');
            $testing = $this->input->get('testing');
            $fold = $this->input->get('fold');


            $api = "http://127.0.0.1:5000/processing?threshold=" . $threshold . "&training=" . $training . "&testing=". $testing ."&fold=". $fold;

            // header('Content-Type: application/json; charset=utf-8');
            
            //$headers = get_headers($api);
            //$res = substr($headers[0], 9, 3);
            $res = 200;


            if( empty( $threshold ) ) return [];

            if ( $res != 200 ) {

                return []; // empty


            } else {

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


                    
    
                } else {
    
                    return []; // empty
                    // echo "Crawling gagal !";
                }
            }

           
        }






        public function ig() {

            $data = $this->db->get('processing')->row_array();

            $dt_processing = $data['dt_processing'];
            
            $data_json_stripe = stripslashes( $dt_processing );
            $cleaning = str_replace("\\n", "", $dt_processing);
                
            $cleaning = str_replace("\'","'",$cleaning); // remove only slash
            $cleaning = stripslashes($cleaning); // remove only slash
            $cleaning = stripslashes($cleaning); // remove only slash
            $cleaning = stripslashes($cleaning); // remove only slash
            $cleaning = str_replace('"[', "[", $cleaning);
            $cleaning = str_replace(']"', "]", $cleaning);
            $cleaning = str_replace('"{', "{", $cleaning);
            $cleaning = str_replace('}"', "}", $cleaning);

            $decode = json_decode( $cleaning );

            header('Content-Type: application/json');
            print_r( $decode );
        }
    }
    
    /* End of file Dashboard.php */
    