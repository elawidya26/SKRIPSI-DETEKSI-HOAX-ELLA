<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Profile extends CI_Controller {
        

        function __construct() {

            parent::__construct();

            // load model
            $this->load->model('M_profile');
        }

        public function index(){


            $data['profile'] = $this->M_profile->get();

            $this->load->view('template/header');

            $this->load->view('profile/view_profile', $data);

            $this->load->view('template/footer');
        }    




        // view tambah profile
        public function tambah() {

            $this->load->view('template/header');

            $this->load->view('profile/view_profile_tambah');

            $this->load->view('template/footer');
        }


        // proses tambah
        public function prosestambah() {

            $tabel_profile = array(

                'username'           => $this->input->post('username'),
                'password'           => $this->input->post('password'),
                'nama'               => $this->input->post('nama'),
                'foto'               => $this->input->post('foto'),
                
            );

            $this->M_profile->insert($tabel_profile);
            redirect('profile/index');

        }


        public function proseshapus( $id_profile ) {

            $this->M_profile->delete($id_profile);
            redirect('profile/index');
        }




        // view update
        public function update( $id_profile ) {

            $data['profile'] = $this->M_profile->getSpecificData( $id_profile )->row_array();

            $this->load->view('template/header');

            $this->load->view('profile/view_profile_update', $data);

            $this->load->view('template/footer');
        }
        
        public function prosesupdate( $id_profile ) {

            $tabel_profile = array(

                'username'           => $this->input->post('username'),
                'password'           => $this->input->post('password'),
                'nama'               => $this->input->post('nama'),
                'foto'               => $this->input->post('foto'),
            );

            $this->M_profile->update($id_profile, $tabel_profile);
            redirect('profile/index');
        }
    }
    
    /* End of file Profile.php */
    