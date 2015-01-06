<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model {

    public $login;
    public $fio;
    public $status;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('users', 10);
        return $query->result_array();
    }

    public function user_add()
    {
        $this->login = $_POST['login']; // please read the below note
        $this->fio = $_POST['fio'];
        $this->status = $_POST['status'];

        $this->db->insert('users', $this);
    }

    public function update_entry()
    {
        $this->login = $_POST['login'];
        $this->fio  = $_POST['fio'];
        $this->status = $_POST['status'];

        $this->db->update('users', $this, array('id' => $_POST['id']));
    }

}