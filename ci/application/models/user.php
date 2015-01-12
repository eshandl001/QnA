<?php

class User extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 //register
    function register($name,$username,$pwd)
    {
        // is username unique?
        $res = $this->db->get_where('users',array('username' => $username));
        if ($res->num_rows() > 0) {
            return 'Username already exists';
        }
        // username is unique
        $salt = substr(sha1(mt_rand()),0,20); 
        $hashpwd = sha1($salt . $pwd);
        $data = array('name' => $name,'username' => $username,
                      'password' => $hashpwd,
                        'salt' => $salt);
        $this->db->insert('users',$data);
        return null; // no error message because all is ok
    }
    
    function login($username,$pwd)
    {
        
        
        $this->db->where(array('username' => $username));
        $res = $this->db->get('users',array('salt'));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }
        
        $rowData = $res->row_array();
        $this->db->where(array('username' => $username,'password' => sha1($rowData['salt'] . $pwd)));
        $res = $this->db->get('users',array('name'));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }

        // remember login
        $session_id = $this->session->userdata('session_id');
        // remember current login
        $row = $res->row_array();
        $this->db->insert('logins',array('name' => $row['name'],'session_id' => $session_id));
        
        $this->session->set_userdata('username',$username);
        return $res->row_array();
    }

    function is_loggedin()
    {
        $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins',array('session_id' => $session_id));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            return $row['name'];
        }
        else {
            return false;
        }
    }
    
    
}
