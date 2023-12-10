<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class MainController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->call->model('user_model');
        $this->LAVA = lava_instance();
    }

    public function checkout()
    {
        
    }
}
?>