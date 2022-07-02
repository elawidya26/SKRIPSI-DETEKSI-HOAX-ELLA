<?php  

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Berita extends CI_Controller {
        
        function __construct() {

            parent::__construct();
            $this->load->model('M_berita');
        }

        public function index(){
            
            $data['berita'] = $this->M_berita->get();

            $this->load->view('template/header');
            $this->load->view('berita/view_berita', $data);
            $this->load->view('template/footer');
        }



        // view tambah dataset
        public function tambah() {

            $this->load->view('template/header');

            $this->load->view('berita/view_berita_tambah');

            $this->load->view('template/footer');
        }


        // proses tambah
        public function prosestambah() {

            $config['upload_path']          = './assets/media/blog/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 3000;
            $config['file_name']             = uniqid();


            $this->load->library('upload', $config);
            $filename = "";

            if ( $this->upload->do_upload('userfile')){

                $filename = $this->upload->data('file_name');
                 
            } else {
                
                $html = '<div class="alert alert-danger">
                    <b>Pemberitahuan</b>
                    '.$this->upload->display_errors().'
                </div>';
                $this->session->set_flashdata('pesan', $html);
                redirect('berita/tambah');
            }


            $tabel_berita = array(

                'id_profile'    => $this->session->userdata('id_profile'),
                'judul' => $this->input->post('judul'), 
                'isi'   => $this->input->post('kt-tinymce-4'),
                'thumbnail' => $filename,
                'visible' => $this->input->post('visible'),
            );

            $this->M_berita->insert($tabel_berita);

            $html = '<div class="alert alert-info">
                <b>Pemberitahuan</b><br>
                Data berhasil ditambahkan pada tanggal '.date('d F Y H.i A').' 
            </div>';
            $this->session->set_flashdata('pesan', $html);

            redirect('berita/index');

        }


        public function proseshapus( $id_berita ) {

            $html = '<div class="alert alert-danger">
                <b>Pemberitahuan</b><br>
                Data berhasil dihapus pada tanggal '.date('d F Y H.i A').' 
            </div>';
            $this->session->set_flashdata('pesan', $html);

            $this->M_berita->delete($id_berita);
            redirect('berita/index');
        }




        // view update
        public function update( $id_berita ) {

            $data['berita'] = $this->M_berita->getSpecificData( $id_berita )->row_array();

            $this->load->view('template/header');
            $this->load->view('berita/view_berita_update', $data);
            $this->load->view('template/footer');
        }
        
        public function prosesupdate( $id_berita ) {


            $config['upload_path']          = './assets/media/blog/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 3000;
            $config['file_name']             = uniqid();


            $this->load->library('upload', $config);
            $filename = "";

            // apabila user mengganti gambar
            if ( !empty($_FILES['name']['userfile']) ) {

                if ( $this->upload->do_upload('userfile')){

                    $filename = $this->upload->data('file_name');
                     
                } else {
                    
                    $html = '<div class="alert alert-danger">
                        <b>Pemberitahuan</b>
                        '.$this->upload->display_errors().'
                    </div>';
                    $this->session->set_flashdata('pesan', $html);
                    redirect('berita/update/'. $id_berita);
                }
            } else {

                // user tidak melakukan update
                $berita = $this->M_berita->getSpecificData( $id_berita )->row_array();
                $filename = $berita['thumbnail'];
            }

            


            $tabel_berita = array(

                'id_profile'    => $this->session->userdata('id_profile'),
                'judul' => $this->input->post('judul'), 
                'isi'   => $this->input->post('kt-tinymce-4'),
                'thumbnail' => $filename,
                'visible' => $this->input->post('visible'),
            );


            $this->M_berita->update($id_berita, $tabel_berita);


            $html = '<div class="alert alert-success">
                <b>Pemberitahuan</b><br>
                Data berhasil diperbarui pada tanggal '.date('d F Y H.i A').' 
            </div>';
            $this->session->set_flashdata('pesan', $html);

            redirect('berita/index');
        }

    
    }
    
    /* End of file Berita.php */