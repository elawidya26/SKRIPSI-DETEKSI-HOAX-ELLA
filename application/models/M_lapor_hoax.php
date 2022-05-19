<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_lapor_hoax extends CI_Model {
        

        protected $table = "lapor_hoax";
        protected $primaryKey = "id_lapor_hoax";


        // bagian tampil
        public function get() {

            return $this->db->get($this->table);
        }

        public function getSpecificData( $id_lapor_hoax ) {

            $this->db->where( $this->primaryKey, $id_lapor_hoax );
            return $this->db->get( $this->table );
        } 


        // nagoam omsert
        public function insert( $data ) {

            $this->db->insert( $this->table, $data );
        }


        public function delete( $id_lapor_hoax ) {

            $this->db->where( $this->primaryKey, $id_lapor_hoax );
            $this->db->delete( $this->table );
        }


        public function update( $id_lapor_hoax, $data ) {

            $this->db->where( $this->primaryKey, $id_lapor_hoax );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_lapor_hoax.php */
    