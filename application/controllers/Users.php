<?php

class Users extends CI_Controller {

    public function index()
    {
        $this->load->model('users_model');
        $data['query'] = $this->users_model->get_last_ten_entries();
        $this->load->view('users_view', $data);
    }

    public function user_add()
    {
        $this->load->model('users_model');
        $this->load->helper('form');
        $data['query'] = $this->users_model->user_add();
        $this->load->view('user_add_view', $data);
    }
}

