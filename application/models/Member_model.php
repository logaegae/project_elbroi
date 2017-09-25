<?php
class Member_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function getList(){

        return $this->db->query("SELECT * FROM Member")->result();
    }

    function getByEmail($option){
    	$result = $this->db->get_where('Member', array('email'=> $option))->row();
    	if($result){
    		return $result;
    	} else {
			return FALSE;
    	}
    }

    //password_hash 없을 때
    function login($data) {

        $query = $this -> db -> get_where('Member', array('email' => $data['email'], 'password' => $data['password']));

    	if ($query -> num_rows() > 0) {
    		return $query -> row();
    	} else {
    		return FALSE;
    	}
    }

    function signup($data) {

		$memberData = array(
			'email' => $data['email'],
			'name' => $data['name'],
			'password' => $data['password'],
			'phone' => $data['phone']
		);

		$this->db->insert('Member', $memberData);
		$result = $this->db->insert_id();
		return $result;
    }
}
