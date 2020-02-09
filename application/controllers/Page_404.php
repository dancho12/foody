<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_404 extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $this->data['title'] = "Страница не найдена";

        $this->load->view('templates/header', $this->data);
		$this->load->view('page_404', $this->data);
		$this->load->view('templates/footer', $this->data);
    }
}