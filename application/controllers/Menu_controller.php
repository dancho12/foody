<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug = null)
    {
        $this->load->library('pagination');

        $this->data['menu_data'] = null;

        $row_count = 6;

        $count = 0;

        $this->load->model('Menu_model');

        if ($slug == "category") {
            $count = count($this->Menu_model->getMenu());
            $p_config['base_url'] = '/menu/category';
            $this->data['title'] = "Our Menu";
            $this->data['menu_data'] = $this->Menu_model->getMenuOnPage("menu", $row_count);
        }

        $slug_data = $this->Menu_model->getMenu();
        foreach ($slug_data as $val) {
            if ($slug == $val['slug']) {
                $count = count($this->Menu_model->getMenu("menu_items", $val['category_id']));
                $p_config['base_url'] = '/menu/' . $val['slug'];
                $this->data['title'] = $val['name'];
                $this->data['menu_data'] = $this->Menu_model->getMenuOnPage("menu_items", $row_count, $val['category_id']);
            }
        }

        $p_config['total_rows'] = $count;
        $p_config['per_page'] = $row_count;

        $p_config['full_tag_open'] = '<nav class="paging-navigation">';
        $p_config['full_tag_close'] = "</nav>";
        $p_config['cur_tag_open'] = '<a href="#" class="page-numbers active">';
        $p_config['cur_tag_close'] = "</a>";
        $p_config['next_link'] = '»';
        $p_config['prev_link'] = '«';

        //init pagination
        $this->pagination->initialize($p_config);

        $this->data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $this->data);
        $this->load->view('menu', $this->data);
        $this->load->view('templates/footer', $this->data);
    }

    public function type()
    {

        $this->data['title'] = "Меню";
        $this->load->model('Menu_model');
        $this->data['menu_data'] = $this->Menu_model->getMenu();
        $this->load->view('templates/header', $this->data);
        $this->load->view('menu', $this->data);
        $this->load->view('templates/footer', $this->data);

    }
}
