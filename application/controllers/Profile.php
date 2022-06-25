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


            $config['upload_path']          = './assets/media/profile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 3000;

            $this->load->library('upload', $config);

            $filename = "";
            if ( $this->upload->do_upload('userfile')){ // upload berhasil

                $filename = $this->upload->data('file_name');
            
            } else { // upload gagal

                $html = '<div class="alert alert-danger"><b>Pemberitahuan</b>'.$this->upload->display_errors().'</div>';
                $this->session->set_flashdata('msg', $html);

                redirect('profile/index');
            }



            // inputan password user
            $password = $this->input->post('password');
            $tabel_profile = array(

                'username'           => $this->input->post('username'),
                'password'           => password_hash( $password, PASSWORD_DEFAULT ),
                'nama'               => $this->input->post('nama'),
                'url'               => base_url($config['upload_path']. $filename),
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


            // proses update
            $dt_profile = $this->M_profile->getSpecificData( $id_profile )->row_array();
            $config['upload_path']          = './assets/media/profile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 3000;

            $this->load->library('upload', $config);

            $filename = "";
            if ( $_FILES['userfile']['size'] > 0 ) {

                
                if ( $this->upload->do_upload('userfile')){ // upload berhasil

                    // apakah user sebelumnya memiliki file ? 
                    if ( $dt_profile['url'] ) {

                        // hapus foto lama
                        // ambil link 
                        $url = $dt_profile['url'];
                        // explode 
                        $exp = explode('profile/', $url);
                        $old_filename = $exp[1];

                        unlink( $config['upload_path'] . $old_filename );
                    }

                    $filename = $this->upload->data('file_name');
                    $filename = base_url().$config['upload_path'].$filename;
                
                } else { // upload gagal
    
                    $html = '<div class="alert alert-danger"><b>Pemberitahuan</b>'.$this->upload->display_errors().'</div>';
                    $this->session->set_flashdata('msg', $html);
    
                    redirect('profile/index');
                }
            } else {

                $filename = $dt_profile['url'];
            }



            // inputan password user
            $password = $this->input->post('password');

            // apakah user mengisi password 
            if ( $password ) {

                $password = password_hash( $password, PASSWORD_DEFAULT );

            } else {

                $password = $dt_profile['password'];
            }


            $tabel_profile = array(

                'username'           => $this->input->post('username'),
                'password'           => $password,
                'nama'               => $this->input->post('nama'),
                'url'               => $filename
            );


            $this->M_profile->update($id_profile, $tabel_profile);

            $html = '<div class="alert alert-info"><b>Pemberitahuan</b><br>Update data berhasil</div>';
            $this->session->set_flashdata('msg', $html);

            redirect('profile/index');
        }
    }
    
    /* End of file Profile.php */
    