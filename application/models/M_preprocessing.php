<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_preprocessing extends CI_Model {
        

        protected $table = "preprocessing";
        protected $primaryKey = "id_preprocessing";
        protected $foreignKey = "id_dataset";

        // bagian tampil
        public function get() {

            return $this->db->get($this->table);
        }

        public function getSpecificData( $id_preprocessing, $id_dataset ) {

            $this->db->where( $this->primaryKey, $id_preprocessing );
            // $this->db->join( $this->foreignKey, $id_dataset );
            return $this->db->get( $this->table );
        } 


        // nagoam omsert
        public function insert( $data ) {

            
            $this->db->insert( $this->table, $data );
        }


        public function delete( $id_preprocessing , $id_dataset ) {

            $this->db->where( $this->primaryKey, $id_preprocessing );
            $this->db->join( $this->foreignKey, $id_dataset );
            $this->db->delete( $this->table );
        }


        // insert batch
        public function insert_batch( $data ) {

            $this->db->empty_table( $this->table );
            $this->db->insert_batch( $this->table, $data );
        }


        public function update( $id_preprocessing,$id_dataset ,  $data ) {

            $this->db->where( $this->primaryKey, $id_preprocessing );
            $this->db->join( $this->foreignKey, $id_dataset );
            $this->db->update( $this->table, $data );
        }
    }
    
    /* End of file M_preprocessing.php */
    