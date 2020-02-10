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

        $month = array(1 => "JAN",2 => "FEB",3 => "MAR",4 => "APR",5 => "MAY",6 => "JUN",7 => "JUL",8 => "AUG",9 => "SEP",10 => "OCT",11 => "NOV",12 => "DEC");
        $this->data['months'] = $month;

        $this->load->model('Blog_model');
        $this->data['blog_data'] = $this->Blog_model->getBlogOnPage(4);


        $this->load->view('templates/header', $this->data);
		$this->load->view('main', $this->data);
    }
}

