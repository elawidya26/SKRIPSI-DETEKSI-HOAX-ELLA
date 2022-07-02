<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Preprocessing extends CI_Controller {
    function __construct() {

        parent::__construct();
        // load model
        $this->load->model('M_preprocessing');
    }

    public function index()
    {
        $data['preprocessing'] = $this->M_preprocessing->get();

        $this->load->view('template/header');

        $this->load->view('preprocessing/view_preprocessing' , $data);
        
        $this->load->view('template/footer');
    }

    // view tambah preprocessing
    public function tambah() {

        $this->load->view('template/header');

        $this->load->view('preprocessing/view_preprocessing_tambah');

        $this->load->view('template/footer');
    }


    // proses tambah
    public function prosestambah() {

        $tabel_preprocessing = array(

            'hasil'             => $this->input->post('hasil'),
            
            'label'             => $this->input->post('label'),
        );

        $this->M_preprocessing->insert($tabel_preprocessing);
        redirect('preprocessing/index');

    }


    public function proseshapus( $id_preprocessing ) {

        $this->M_preprocessingt->delete($id_preprocessing);
        redirect('preprocessing/index');
    }




    // view update
    public function update( $id_preprocessing ) {

        // $data['preprocessing'] = $this->M_preprocessing->getSpecificData( $id_preprocessing )->row_array();
        $data['preprocessing'] = $this->db->get_where('preprocessing', ['id_preprocessing' => $id_preprocessing])->row_array();

        $this->load->view('template/header');

        $this->load->view('preprocessing/view_preprocessing_update', $data);

        $this->load->view('template/footer');
    }
    
    public function prosesupdate( $id_preprocessing ) {

        $tabel_preprocessing = array(

            'hasil'           => $this->input->post('hasil'),
            'label'             => $this->input->post('label'),
        );

        // $this->M_preprocessing->update($id_preprocessing, $tabel_preprocessing);
        $this->db->where('id_preprocessing', $id_preprocessing)->update('preprocessing', $tabel_preprocessing);
        redirect('preprocessing/index');
    }





    public function eksekusi_api() {

        $api = "http://127.0.0.1:5000/preprocessing";

            // $file = file_get_contents( $api );

            $headers = get_headers($api);
            $res = substr($headers[0], 9, 3);

            $ch = curl_init(); 
                    
            // set url
            curl_setopt($ch, CURLOPT_URL, $api); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

            // $output contains the output string 
            $file = curl_exec($ch); 

            // close curl resource to free up system resources 
            curl_close($ch); 
            $decode = json_decode( $file );

            // echo $file;


            if ( $res != 200 ) {

                return []; // empty

            } else {

                if ( $decode->status ) {


                    $data = array();
    
                    foreach ( $decode->data AS $isi){
    
                        array_push( $data, array(
    
                            'id_dataset'    => $isi->id_dataset,
                            'hasil'         => $isi->text,
                            'label'         => $isi->label
                        ) );
                    }
    
    
                    // insert to db
                    $this->M_preprocessing->insert_batch( $data );

                    $html = '<div class="alert alert-info">
                        <b>Pemberitahuan</b><br>
                        Preprocessing berhasil dengan waktu '.$decode->execution.' detik pada '.date('d F Y H.i A').' 
                    </div>';
                    $this->session->set_flashdata('pesan', $html);
    
                    redirect('preprocessing/index');
    
                } else {
    
                    echo "Eksekusi gagal !";
                }
            }
            
    }

}

/*Preprocessing.php */
