<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class user extends Controller {
    public function home() 
    {

       $this->call->view('user/home');
    }
     public function Shoppingcart() 
     {

        $this->call->view('user/Shoppingcart');
     }
     public function checkout() 
     {

        $this->call->view('user/checkout');
     }
     public function contact() 
     {

        $this->call->view('user/contact');
     }
}
?>
