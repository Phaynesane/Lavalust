<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class user extends Controller {
    public function home() 
    {

       $this->call->view('user/home');
    }
     public function addtocart() 
     {

        $this->call->view('user/addtocart');
     }
     public function checkout() 
     {

        $this->call->view('user/checkout');
     }
     public function TrackOrder() 
     {

        $this->call->view('user/TrackOrder');
     }
}
?>
