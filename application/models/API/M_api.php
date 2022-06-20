<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_api extends CI_Model {
    
        
        // ambil data 
        public function get( $table, $key = null ) {

            if ( $key ) {

                $query = $this->db->get_where( $table, $key );

            } else {

                $query = $this->db->get( $table );
            }

            return $query;
        }



        // update data
        public function update( $table, $data, $key ) {

            $this->db->where( $key );
            $this->db->update( $table, $data );
        }


        // delete 
        public function delete( $table, $key ) {

            $this->db->where( $key );
            $this->db->delete( $table );
        }


        // insert data
        public function insert( $table, $data ) {

            $this->db->insert( $table, $data );
        }
    }
    
    /* End of file M_api.php */
    