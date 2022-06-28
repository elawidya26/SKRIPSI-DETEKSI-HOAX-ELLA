<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_faq extends CI_Model {


        // mengkombinasikan menjadi satu antara faq dan faq detial
        public function ambil_data( $table ) {

            return $this->db->get( $table );
        }


        // ambil data berdasarkan id
        public function ambil_data_berdasarkan( $table, $where ) {

            return $this->db->where( $where )->get( $table );
        }


        // hapus data 
        public function hapus_data( $table, $where ) {

            $this->db->where( $where )->delete( $table );
        }


        // ubah data
        public function ubah_data( $table, $where, $data ) {

            $this->db->where( $where )->update( $table, $data );
        }


        // tambah data 
        public function tambah_data( $table, $data ) {

            $this->db->insert( $table, $data );
        }
    }
    
    /* End of file M_faq.php */
    