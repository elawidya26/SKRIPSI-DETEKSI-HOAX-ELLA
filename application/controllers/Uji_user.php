<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uji_user extends CI_Controller {

    function __construct() {

        parent::__construct();
    }
    public function index()
    {
         $this->load->view('uji_user/view_uji_user');
    }

}

/* End of file Uji_user.php */
