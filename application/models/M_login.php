<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
    
        
        // @TODO 3 : query sql where username
        public function ambil_data_profile_berdasarkan_username( $ambilUsername ) {

            $this->db->where('username', $ambilUsername);
            $query = $this->db->get('profile');


            return $query;
        }
    }
    
    /* End of file M_login.php */
    