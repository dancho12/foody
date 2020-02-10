<?php

class Menu_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getMenu($table = "menu", $type = "s")
    {
        if ($type == "s") {
            $query = $this->db
                ->get($table);
            return $query->result_array();
        } else {
            $query = $this->db
                ->where('c_id', $type)
                ->get($table);
            return $query->result_array();
        }

    }

    public function getFilms($slug = false, $limit, $type = 1)
    {
        if ($slug === false) {
            $query = $this->db
                ->where('category_id', $type)
                ->order_by('add_date', 'desc')
                ->limit($limit)
                ->get('movie');
            return $query->result_array();
        }

        $query = $this->db->get_where('movie', array('slug' => $slug));
        return $query->row_array();
    }

    public function getFilmsByRating($limit)
    {
        $query = $this->db
            ->order_by('rating', 'desc')
            ->where('category_id', 1)
            ->where('rating>', 0)
            ->limit($limit)
            ->get('movie');
        return $query->result_array();
    }

    public function getMenuOnPage($table, $row_count,$offset = 0, $type = "s")
    {
        if ($type == "s") {
            $query = $this->db
                ->get($table, $row_count,$offset);
            return $query->result_array();
        } else {
            $query = $this->db
            ->where('c_id',$type)
            ->get($table, $row_count,$offset);
        return $query->result_array();
        }

    }
}
