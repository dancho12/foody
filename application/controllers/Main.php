<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Main extends CI_Controller{


    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $this->data['title'] = "Главная страница";
        $this->data['active'] = "class='active'";
        $this->load->model('Menu_model');
        $this->data['menu_data'] = $this->Menu_model->getMenuOnPage("menu",4);


        $this->load->view('templates/header', $this->data);
		$this->load->view('main', $this->data);
    }
}

