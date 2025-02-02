<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_posts($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('id' => $id));
        return $query->row_array();
    }

    public function create_post($data) {
        return $this->db->insert('posts', $data);
    }

    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    public function delete_post($id) {
        $this->db->where('id', $id);
        return $this->db->delete('posts');
    }
}