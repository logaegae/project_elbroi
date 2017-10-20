<?php
class Goods_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function save($data) {

		$data = array(
			'email' => $data['email'],
			'name' => $data['name'],
			'password' => $data['password'],
			'phone' => $data['phone']
		);

		$this->db->insert('Goods', $data);
		$result = $this->db->insert_id();
		return $result;
    }
}
