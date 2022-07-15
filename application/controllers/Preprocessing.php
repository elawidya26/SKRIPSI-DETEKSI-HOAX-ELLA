<?php

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
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





    // prepro api 
    public function do_preprocessing() {

        $this->db->where('name', "preprocessing")->update("scheduling", ['status' => 1]);

        $api = "http://127.0.0.1:5000/preprocessing";
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
            Sedang menjalankan proses Preprocessing pada latar belakang, periksa notifikasi untuk melihat status terkini 
        </div>';
        $this->session->set_flashdata('pesan', $html);
        redirect('preprocessing/index');
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



    // tampil data
    public function tampil() {

        // ambil data eksekusi api 
        $dt_prepro = $this->db->get('preprocessing');
        
        $isi_tabel = "";
        foreach ( $dt_prepro->result_array() AS $urutan => $row ) {
            

            if ( $row['label'] == "TRUE" ) {


                $label = '<span class="label label-light-success label-pill label-inline">TRUE</span>';
            } else {

                $label = '<span class="label label-light-danger label-pill label-inline">FAKE</span>';
            }

            $isi_tabel .= '<tr>
                <td>'.($urutan + 1).'</td>
                <td>'.$row['hasil'].'</td>
                <td>'.$label.'</td>
            </tr>';
        }


        echo json_encode([

            'pesan' => "",
            'data'  => $isi_tabel
        ]);
    }


    public function hasil() {


        // truncate before preprocessing
        $this->db->empty_table( "preprocessing" );
        // update all dataset status's to 0 
        $this->db->where('status', 1)->update('dataset', ['status' => 0]);

        $this->eksekusi_api();
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
            curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);




            // $output contains the output string 
            $file = curl_exec($ch); 

            // close curl resource to free up system resources 
            curl_close($ch); 
            
            
    }

}

/*Preprocessing.php */
