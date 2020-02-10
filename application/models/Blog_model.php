<?php

class Blog_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getBlog($slug = FALSE)
    {
        if($slug ==FALSE){
             $query = $this->db
             ->order_by('add_date', 'desc')
            ->get('blog');
        return $query->result_array();
        }
       
            $query = $this->db->get_where('blog', array('slug' => $slug));
        return $query->row_array();
       

    }

    public function getBlogOnPage($row_count,$offset=0)
    {

        $query = $this->db
            ->order_by('add_date', 'desc')
            ->get('blog', $row_count,$offset);
        return $query->result_array();

    }
}
