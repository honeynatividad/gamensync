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

    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
}