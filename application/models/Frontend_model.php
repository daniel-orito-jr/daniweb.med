<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_model extends CI_Model {

    public function __construct() {
        $this->load->database('default');
        $this->load->library('session');
        parent::__construct();
    }
}

?>