<?php  

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        
        function __construct() {

            parent::__construct();

            $this->load->model('M_login');
        }

        public function index(){
            
            $this->load->view('login/view_login');
        }


        public function proseslogin() {

            /**
             *  1. Ambil data username dan password
             *  2. ambil data username melalui model 
             *  3. query sql where username
             *  4. pencocokan apabila username tersedia ? 
             *      4.1 apabila ada maka lanjut ke step - 5 
             *      4.2 apabila tidak maka berakhir : kembali ke halaman login
             *  5. Pencocokan password
             *      5.1 Pw benar maka diarahkan ke dashboard
             *      5.2 Pw salah maka diarahkan ke halaman login
             */

            // @TODO 1 : Ambil data username dan password
            $ambilUsername = $this->input->post('username');
            $ambilPassword = $this->input->post('password');


            // @TODO 2 : Ambil data username melalui model 
            $ambilUsernameFromModel = $this->M_login->ambil_data_profile_berdasarkan_username( $ambilUsername );

            // @TODO 3 : cek ada di M_login.php

            // @TODO 4 : apabila username tersedia | kalau 1 maka tersedia sedangkan 0 maka username tidak terdaftar
            if ( $ambilUsernameFromModel->num_rows() == 1 ) {

                $kolom = $ambilUsernameFromModel->row_array();
                $passwordAkun = $kolom['password'];

                // @TODO 5 : cek password
                if ( password_verify( $ambilPassword, $passwordAkun ) ) {


                    // simpan sesi login 
                    $this->session->set_userdata('id_profile', $kolom['id_profile']);
                    $this->session->set_userdata('nama', $kolom['nama']);


                    redirect('dashboard/index');


                } else {

                    $html = '<div class="alert alert-danger text-left">Pemberitahuan<br><small>Kata sandi yang anda masukkan salah</small></div>';
                    $this->session->set_flashdata('pesan', $html);

                    // password salah
                    redirect('login/index');
                }
                

            } else {

                $html = '<div class="alert alert-danger text-left">Pemberitahuan<br><small>Akun tidak terdaftar</small></div>';
                $this->session->set_flashdata('pesan', $html);

                // akun tidak terdaftar
                redirect('login/index');
            }

        }


        public function proseslogout() {

            $this->session->sess_destroy();

            // akun tidak terdaftar
            redirect('login/index');
        }



        function enkripsi() {

            $new_password = "ella";
            echo password_hash( $new_password, PASSWORD_BCRYPT );
        }
        
        
    }
    
    /* End of file Login.php */
    