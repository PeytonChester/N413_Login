<?php

/**
 * Created by PhpStorm.
 * User: PeytonChester
 * Date: 1/31/19
 * Time: 12:05 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct(); //create the database connection
    }

    public function auth($login){
        $email = $login["email"];
        $password = $login["password"];
        $password = trim($password);
        $password = sha1($password); //encrypt the password

        $sql = "SELECT id FROM login 
        		WHERE email = ".$this->db->escape($email)."
        		AND password = '".$password."' ";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result[0]["id"];
        }else{
            return false;
        }
    }

    public function register($login){
        $name = $login["firstName"]." ".$login["lastName"];
        $email = $login["email"];
        $password = $login["password"];
        $password = trim($password);
        $password = sha1($password); //encrypt the password

        $sql = "SELECT id FROM login 
        		WHERE email = ".$this->db->escape($email);
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return false; //this username exists
        }else{
            $sql = "INSERT INTO login (`id`, `name`, `email`, `password`) 
        	VALUES (NULL, '".$name."', ".$this->db->escape($email).", '".$password."' )";
            $query = $this->db->query($sql);
            return $this->db->insert_id();
        }
    }

}// end login model