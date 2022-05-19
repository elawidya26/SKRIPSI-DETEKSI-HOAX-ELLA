<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Lapor_hoax extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_lapor_hoax');
        }

        public function index(){


            $data['lapor_hoax'] = $this->M_lapor_hoax->get();

            $this->load->view('template/header');

            $this->load->view('lapor_hoax/view_lapor_hoax', $data);

            $this->load->view('template/footer');
        }    




        // view tambah lapor_hoax
        public function tambah() {

            $this->load->view('template/header');

            $this->load->view('lapor_hoax/view_lapor_hoax_tambah');

            $this->load->view('template/footer');
        }


        // proses tambah
        public function prosestambah() {

            $tabel_lapor_hoax = array(

                'judul'             => $this->input->post('judul'),
                'isi'               => $this->input->post('isi'),
                'label'             => $this->input->post('label'),
                'sumber'            => $this->input->post('sumber'),
                'bukti'             => $this->input->post('bukti'),
                'nama'              => $this->input->post('nama'),
                'email'             => $this->input->post('email'),
                'status'            => $this->input->post('status'),
                
            );

            $this->M_lapor_hoax->insert($tabel_lapor_hoax);
            redirect('lapor_hoax/index');

        }


        public function proseshapus( $id_lapor_hoax ) {

            $this->M_lapor_hoax->delete($id_lapor_hoax);
            redirect('lapor_hoax/index');
        }




        // view update
        public function update( $id_lapor_hoax ) {

            $data['lapor_hoax'] = $this->M_lapor_hoax->getSpecificData( $id_lapor_hoax )->row_array();

            $this->load->view('template/header');

            $this->load->view('lapor_hoax/view_lapor_hoax_update', $data);

            $this->load->view('template/footer');
        }
        
        public function prosesupdate( $id_lapor_hoax ) {

            $tabel_lapor_hoax = array(

                'judul'             => $this->input->post('judul'),
                'isi'               => $this->input->post('isi'),
                'label'             => $this->input->post('label'),
                'sumber'            => $this->input->post('sumber'),
                'bukti'             => $this->input->post('bukti'),
                'nama'              => $this->input->post('nama'),
                'email'             => $this->input->post('email'),
                'status'            => $this->input->post('status'),
            );

            $this->M_lapor_hoax->update($id_lapor_hoax, $tabel_lapor_hoax);
            redirect('lapor_hoax/index');
        }
    }
    
    /* End of file Lapor_hoax.php */
    