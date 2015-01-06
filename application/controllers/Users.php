<?php

class Users extends CI_Controller {

    public function index()
    {
        $this->load->model('Users_model');
        echo 'Hello World!';
    }

    public function comments()
    {
        echo 'Look at this!';
    }
}

