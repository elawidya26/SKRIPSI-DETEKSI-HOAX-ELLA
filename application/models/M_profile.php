<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_profile extends CI_Model {
        

        protected $table = "profile";
        protected $primaryKey = "id_profile";


        // bagian tampil
        public function get() {

            return $this->db->get($this->table);
        }

        public function getSpecificData( $id_profile ) {

            $this->db->where( $this->primaryKey, $id_profile );
            return $this->db->get( $this->table );
        } 


        // nagoam omsert
        public function insert( $data ) {

            $this->db->insert( $this->table, $data );
        }


        public function delete( $id_profile ) {

            $this->db->where( $this->primaryKey, $id_profile );
            $this->db->delete( $this->table );
        }


        public function update( $id_profile, $data ) {

            $this->db->where( $this->primaryKey, $id_profile );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_profile.php */
    