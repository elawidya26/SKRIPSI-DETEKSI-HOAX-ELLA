<?php 

use chriskacerguis\RestServer\RestController;
class Preprocessing extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "preprocessing";
    }



    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Kosong";

        
        $id_preprocessing = $this->input->get('id_preprocessing');
        $dt_data = []; // 

        // Request 
        if ( !empty( $id_preprocessing ) ) {

            $where = ['id_preprocessing' => $id_preprocessing];
            $ambil_data = $this->M_api->get( $this->table, $where );
            
            if ( $ambil_data->num_rows() > 0 ) {

                $dt_data = $ambil_data->result_array();
            }
        } else {

            $ambil_data = $this->M_api->get( $this->table );
            $dt_data = $ambil_data->result_array();
        }

        // Barang
        if ( count( $dt_data ) > 0 ) {

            $status = true;
            $pesan = "Data berhasil ditampilkan";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_data

        ], JSON_PRETTY_PRINT);
        
        // $this->response([
        //     'status' => $status,
        //     'pesan' => $pesan,
        //     'data' => $dt_data
        // ], 200);
    }

}
