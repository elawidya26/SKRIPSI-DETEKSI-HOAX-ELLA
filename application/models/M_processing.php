<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_processing extends CI_Model {
        

        protected $table = "processing";
        protected $primaryKey = "id_processing";


        // bagian tampil
        public function get() {

            return $this->db->get($this->table);
        }

        public function getSpecificData( $id_processing ) {

            $this->db->where( $this->primaryKey, $id_processing );
            return $this->db->get( $this->table );
        } 


        // nagoam omsert
        public function insert( $data ) {

            $this->db->insert( $this->table, $data );
        }


        public function delete( $id_processing ) {

            $this->db->where( $this->primaryKey, $id_processing );
            $this->db->delete( $this->table );
        }


        public function update( $id_processing, $data ) {

            $this->db->where( $this->primaryKey, $id_processing );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_processing.php */
    