<?php 

    // Include librari PhpSpreadsheet
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

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








        // import by excel
        public function import() {

            $filename = "";

            $config['upload_path']          = './temporary/';
            $config['allowed_types']        = 'xlsx';
            $config['max_size']             = 10000;
            $config['file_name']      = uniqid();
            $this->load->library('upload', $config);
            
            if ( $this->upload->do_upload('userfile')){

                echo $this->upload->display_errors();
                // die();

            } else {
                
                $filename = $this->upload->data('file_name');
            }




            // excel
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $path = "temporary/". $config['file_name'].'.xlsx';
            $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);



            $data_excel = [];
            foreach ( $sheet as $index => $isi ) {

                if ( $index > 1 ) {

                    $label = "TRUE";

                    if ( (String) $isi['E'] == "FAKE" ) {

                        $label = "FAKE";
                    }



                    $isi_excel = array(

                        'penulis'   => $isi['B'],
                        'isi'       => $isi['D'],
                        'tanggal_dataset'   => date('Y-m-d', strtotime($isi['C'],)),
                        'label' => $label,
                    );

                    array_push( $data_excel, $isi_excel);
                }
            }

            if ( count( $data_excel ) > 0 ) {

                $this->M_dataset->insert_batch( $data_excel );
                redirect('dataset/index');
            } else {

                echo "Excel yang diupload kosong !";
            }
            

            


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

            

            $file = file_get_contents( $api );
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
    