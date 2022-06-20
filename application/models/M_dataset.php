<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dataset extends CI_Model {
        

        protected $table = "dataset";
        protected $primaryKey = "id_dataset";


        // bagian tampil
        public function get() {

            return $this->db->get($this->table);
        }

        public function getSpecificData( $id_dataset ) {

            $this->db->where( $this->primaryKey, $id_dataset );
            return $this->db->get( $this->table );
        } 


        // nagoam omsert
        public function insert( $data ) {

            $this->db->insert( $this->table, $data );
        }



        // insert batch
        public function insert_batch( $data ) {

            $this->db->insert_batch( $this->table, $data );
        }

        public function delete( $id_dataset ) {

            $this->db->where( $this->primaryKey, $id_dataset );
            $this->db->delete( $this->table );
        }


        public function update( $id_dataset, $data ) {

            $this->db->where( $this->primaryKey, $id_dataset );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_dataset.php */
    