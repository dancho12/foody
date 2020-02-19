<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug = null)
    {
        $this->load->library('pagination');
        $offset = (int) $this->uri->segment(2);
        $month = array(1 => "JAN", 2 => "FEB", 3 => "MAR", 4 => "APR", 5 => "MAY", 6 => "JUN", 7 => "JUL", 8 => "AUG", 9 => "SEP", 10 => "OCT", 11 => "NOV", 12 => "DEC");
        $this->data['blog_data'] = null;
        $this->data['months'] = $month;
        $row_count = 6;
        $offset = (int) $this->uri->segment(2);
        $count = 0;

        $this->load->model('Blog_model');

        $count = count($this->Blog_model->getBlog());
        $p_config['base_url'] = '/blog/';
        $this->data['title'] = "Blog";
        $this->data['blog_data'] = $this->Blog_model->getBlogOnPage($row_count, $offset);

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
        $this->load->view('blog', $this->data);
        $this->load->view('templates/footer', $this->data);
    }

    public function page($slug = null)
    {
        $this->load->model('Blog_model');

        $usermane = $this->input->post('author');

        $text = $this->input->post('comment');
        if(isset($usermane)){
            $val = $this->Blog_model->setUsers($usermane);
            $this->Blog_model->setComments($slug,$val['id'],$text);
        }
        $this->data['slug'] = $slug;




        $blog_page = $this->Blog_model->getBlog($slug);
        $this->data['page_data'] = $blog_page;
        $this->data['title'] = $blog_page['title'];
        $all = $this->Blog_model->getBlog();
        $pos;
        $last;
        foreach ($all as $i => $val) {
            if ($blog_page['id'] == $val['id']) {

                $pos = $i;
            }
            $last = $i;
        }
        if ($pos != 0) {

            $this->data['n_page'] = $all[$pos - 1]['slug'];
        }
        if ($pos != $last) {
            $this->data['pr_page'] = $all[$pos + 1]['slug'];

        }

        $blog_comments = $this->Blog_model->getComments($slug);
        if(!empty($blog_comments)){
            foreach($blog_comments as $i=> $val){
            $user = $this->Blog_model->getUsers($val['user_id']);
            $blog_comments[$i]['user_id'] = $user['username'];
        }
        $this->data['comments_count'] = count($blog_comments);
        $this->data['comments'] = $blog_comments;
        $this->data['comments_exist'] = true;
        }else{
            $this->data['comments_count'] = 0;
            $this->data['comments_exist'] = false;
            $this->data['comments'] = "Not yet";
        }

        
        



        

        $this->load->view('templates/header', $this->data);
        $this->load->view('page', $this->data);
        $this->load->view('templates/footer', $this->data);

    }
}
