<?php

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
    }

    public function index()
    {
        $data['users'] = $this->users_model->users_get();
        $this->load->view('users_view', $data);
    }

    public function view($id = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['query'] = $this->users_model->users_get($id);
        $this->load->view('user_info_view', $data);
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'login', 'required');
        $this->form_validation->set_rules('fio', 'fio', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            #$this->load->view('templates/header', $data);
            $this->load->view('user_add_view');
            #$this->load->view('templates/footer');

        }
        else
        {
            $this->users_model->user_add();
            $this->load->view('user_add_success_view');
        }
    }
}

