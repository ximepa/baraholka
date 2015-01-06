<?php

class Users extends CI_Controller {

    public function index()
    {
        $this->load->model('users_model');
        $this->users_model->get_last_ten_entries();
        $data['query'] = $this->users_model->get_last_ten_entries();
        $this->load->view('users_view', $data);
    }

    public function comments()
    {
        echo 'Look at this!';
    }
}

