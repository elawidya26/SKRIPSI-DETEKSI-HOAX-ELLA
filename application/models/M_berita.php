<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_berita extends CI_Model {
    
        
        protected $table = "berita";
        protected $primaryKey = "id_berita";


        // bagian tampil
        public function get() {

            $this->db->select('profile.nama, berita.*')->from('berita');
            $this->db->join('profile', 'profile.id_profile = berita.id_profile');
            return $this->db->get();
        }

        public function getSpecificData( $id_berita ) {

            $this->db->select('profile.nama, berita.*')->from('berita');
            $this->db->join('profile', 'profile.id_profile = berita.id_profile');

            $this->db->where( $this->primaryKey, $id_berita );
            return $this->db->get();
        } 


        // nagoam omsert
        public function insert( $data ) {

            $this->db->insert( $this->table, $data );
        }



        // insert batch
        public function insert_batch( $data ) {

            $this->db->insert_batch( $this->table, $data );
        }

        public function delete( $id_berita ) {


            $this->db->where( $this->primaryKey, $id_berita );
            $this->db->delete( $this->table );
        }


        public function update( $id_berita, $data ) {

            $this->db->where( $this->primaryKey, $id_berita );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_berita.php */
    