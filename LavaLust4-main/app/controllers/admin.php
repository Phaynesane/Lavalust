<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function home() 
    {

       $this->call->view('admin/adminhome');
    }

     public function Dashboard() 
     {

        $this->call->view('admin/Dashboard');
     }
     public function addproductDash() 
     {

        $this->call->view('admin/Dashboard/addproductDash');
     }
     public function inventoryDash() 
     {

        $this->call->view('admin/Dashboard/inventoryDash');
     }
}
?>
