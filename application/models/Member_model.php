<?php
class Member_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function getList(){

        return $this -> db -> select('id, email, name, phone, rank, registrationDate, authorizationYn') -> get_where('Member', array('delYn' => 'N')) -> result();
    }

    function getByEmail($option){
    	$result = $this -> db -> get_where('Member', array('email'=> $option)) -> row();
    	if($result){
    		return $result;
    	} else {
			return FALSE;
    	}
    }

    function signupOk($item){

        $data = array('authorizationYn' => $item['authorizationYn']);
        $where = "id = ".$item['id'];
        $this -> db -> update('Member', $data, $where);
        $item['authorizationYn'] =='N'? $message = '승인을 취소했습니다.': $message = '승인되었습니다.';
        return array('message' => $message);

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
