<?php

class Users extends CI_Controller {

    public function index()
    {
        $this->load->model('users_model');
        $data['query'] = $this->users_model->get_last_ten_entries();
        $this->load->view('users_view', $data);
    }

    public function update($id)
    {
        $this->load->model('users_model');
        $this->load->helper('form');
        $data['query'] = $this->users_model->user_get($id);
        $this->load->view('user_update_view', $data);
    }
}

