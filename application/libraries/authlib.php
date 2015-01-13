<?php

class Authlib {
 
    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();
 
        $this->ci->load->model('users');
 
    }
 
    public function register($username,$password,$re_password,$lname)
    {
        if ($username == '' || $password == '' || $re_password == ''  || $lname == '') {
            return 'Missing field';
        }
        if ($password != $re_password) {
            return "Passwords do not match";
        }
        return $this->ci->users->register($username,$password,$re_password,$lname);
    }
    
    public function login($username,$password)
    {
        if ($username == '' || $password == '') {
            return false;
        }
        return $this->ci->users->login($username,$password);
    }
    
    public function is_loggedin()
    {
        return $this->ci->users->is_loggedin();
    }
    
    public function getUserData($username)
    {
        return $this->ci->users->getData($username);
    }
}