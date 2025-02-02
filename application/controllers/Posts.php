<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('posts/index', $data);
    }

    public function view($id = NULL) {
        $data['post'] = $this->post_model->get_posts($id);

        if (empty($data['post'])) {
            show_404();
        }

        $this->load->view('posts/view', $data);
    }

    public function create() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('posts/create');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content')
            );

            $this->post_model->create_post($data);
            redirect('posts');
        }
    }

    public function edit($id) {
        $data['post'] = $this->post_model->get_posts($id);

        if (empty($data['post'])) {
            show_404();
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('posts/edit', $data);
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content')
            );

            $this->post_model->update_post($id, $data);
            redirect('posts');
        }
    }

    public function delete($id) {
        $this->post_model->delete_post($id);
        redirect('posts');
    }
}