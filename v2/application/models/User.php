<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->load->database();
        $this->userTbl = 'users';
    }


	public function checkusername($id){
        $this->db->where('username', $id);
        $this->db->from($this->userTbl);
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }

}