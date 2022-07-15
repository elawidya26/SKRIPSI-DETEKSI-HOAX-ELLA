<?php

use chriskacerguis\RestServer\RestController;

class Backgroundprocess extends RestController{


    protected $api = "127.0.0.1:5000/";

    public function index_get() {


        $data = $schedule = $this->db->get('scheduling')->result_array();

        echo json_encode( $data );




        // init
        // $status = false;
        // $data = null;


        // // query
        // $this->db->where('status', 1);
        // $schedule = $this->db->get('scheduling');
        


        // if ( $schedule->num_rows() > 0 ){

        //     $job = $schedule->row_array();      
        //     $status = true;    
        //     $data = $job['name'];


        //     // execute 
        //     // if ( $job['status'] == 1 ) {
        //     //     $ch = curl_init(); 


        //     //     $api = $this->api . $data;
                        
        //     //     // set url
        //     //     curl_setopt($ch, CURLOPT_URL, $api); 
        //     //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        //     //     // $output contains the output string 
        //     //     $file = curl_exec($ch); 

        //     //     // close curl resource to free up system resources 
        //     //     curl_close($ch); 

        //     //     $this->db->where('name', $data)->update('scheduling', ['status' => 2]);
        //     // }
        // }


        // $kirim = array(

        //     'status'    => $status,
        //     'data'      => $data
        // );
        // echo json_encode( $kirim );
    }
}