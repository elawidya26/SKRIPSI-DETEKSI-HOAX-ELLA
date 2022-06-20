<?php 

use chriskacerguis\RestServer\RestController;
class Dataset extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "dataset";
    }



    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Kosong";

        
        $id_dataset = $this->input->get('id_dataset');
        $dt_data = []; // 

        // Request 
        if ( !empty( $id_dataset ) ) {

            $where = ['id_dataset' => $id_dataset];
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
    }

}
