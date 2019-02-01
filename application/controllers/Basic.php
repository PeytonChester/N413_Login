<?php

/**
 * Created by PhpStorm.
 * User: PeytonChester
 * Date: 1/31/19
 * Time: 12:10 AM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basic extends CI_Controller {

    public function __construct() {
        parent::__construct(); //autoload libraries
        $user_id = $this->session->userdata('user_id');
        if( $user_id < 1){redirect(base_url().'login');}
    }

    public function index() {
        $this->load->view('head');
        $this->load->view('basic_login');
    }

} //end basic controller

?>