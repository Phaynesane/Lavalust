<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {
	
    public function register()
    {
        $this->call->view('register');
    }
    public function login()
    {
        $this->call->view('login');
    }
}
?>