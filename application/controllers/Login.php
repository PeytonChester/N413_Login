<?php

/**
 * Created by PhpStorm.
 * User: PeytonChester
 * Date: 1/31/19
 * Time: 12:04 AM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct(); //autoload libraries
        $this->load->model('login_model');
    }

    public function index() {
        $this->load->view('head');
        $this->load->view('login_form');
    }

    public function auth() {
        $login = $this->input->post();
        $auth = $this->login_model->auth($login);
        if($auth){ $this->session->set_userdata('user_id', $auth); }
        redirect('basic');
    }

    public function registration() {
        $this->load->view('head');
        $this->load->view('register');
    }

    public function register() {
        $login = $this->input->post();
        $auth = $this->login_model->register($login);
        if($auth){ $this->session->set_userdata('user_id', $auth); }
        redirect('basic');
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        $this->load->view('head');
        $this->load->view('basic_logout');
    }

} //end login controller


?>