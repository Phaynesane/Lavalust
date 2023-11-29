<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {
    public function insert($data){
        $this->db->table('login')->insert($data);
    }
    public function getAll(){
        return $this->db->table('login')->get_all();
    }
        
}
?>
