<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class inner_page extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('frontend_model');
       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Inner Page";
        $this->load->view('header', $arrData);
        $this->load->view('inner-page', $arrData);
        $this->load->view('footer', $arrData);
    }
}