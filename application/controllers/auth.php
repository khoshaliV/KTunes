<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> load -> model('question');
        $this->load->library('authlib');
        $this->load->helper('url');
    }

    public function createaccount() {

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $re_password = $this->input->post('cpassword');

        $fname = $this->input->post('name');


        $respond = ($username = $this->authlib->register($username, $password, $re_password, $fname));
        $this->load->view('homePage');
    }

    public function logout() {
        $this->user->logout();
        $data['username'] = '';
    }

    public function authenticate() {
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $user = $this->authlib->login($username, $password);
        if ($user !== false) {
            $data['user'] = $user;
            $data['questions'] = $this-> question -> getQuestions($user["username"]);
            $this->load->view('home',$data);
        } else {
            $data['username'] = 'Unable to login - please try again';
            $data['questions'] = $this-> question -> getQuestionsList();
            $this->load->view('homePage', $data);
        }
    }

}
