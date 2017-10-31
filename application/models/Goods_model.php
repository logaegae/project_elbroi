<?php
class Goods_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function save($data) {

		$this -> db -> insert('Goods', $data);
		$result = $this -> db -> insert_id();
		return $result;
    }

    function getList(){
        return $this -> db -> select('id, name, code, price, stock, registrationDate, lastChanged, detail') -> get_where('Goods', array('delYn' => 'N')) -> result();
    }
}
