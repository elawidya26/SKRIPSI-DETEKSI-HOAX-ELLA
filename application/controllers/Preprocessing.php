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

        $data['preprocessing'] = $this->M_preprocessing->getSpecificData( $id_preprocessing )->row_array();

        $this->load->view('template/header');

        $this->load->view('preprocessing/view_preprocessing_update', $data);

        $this->load->view('template/footer');
    }
    
    public function prosesupdate( $id_preprocessing ) {

        $tabel_preprocessing = array(

            'hasil'           => $this->input->post('hasil'),
            'label'             => $this->input->post('label'),
        );

        $this->M_preprocessing->update($id_preprocessing, $tabel_preprocessing);
        redirect('preprocessing/index');
    }

}

/*Preprocessing.php */
