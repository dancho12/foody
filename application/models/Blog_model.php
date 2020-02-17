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

    public function getComments($slug){
        $query = $this->db->where('slug',$slug)
        ->get('comments');
        return $query->result_array();
    }
    public function getUsers($id){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function setComments($slug,$username,$email,$url){
        $this->db->query("INSERT INTO users ( `username`, `email`, `url`) VALUES (NULL, $username, $email, $url)");
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
    }

    public function setUsers($username,$email,$url){
        $this->db->query("INSERT INTO users ( `username`, `email`, `url`) VALUES (NULL, $username, $email, $url)");
        $query = $this->db->get_where('users', array('username' => $username));
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
