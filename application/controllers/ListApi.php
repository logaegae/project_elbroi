<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListApi extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this -> load -> model('AdminMember_model');
		$this -> load -> model('Member_model');
		$this -> load -> model('Goods_model');

	}

	public function getAdminList(){

		$result = $this -> AdminMember_model -> getList();

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		$json = array('list' => $result);
		echo json_encode($json);

	}

	public function getMemberList(){

		$result = $this -> Member_model -> getList();

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		$json = array('list' => $result);
		echo json_encode($json);

	}

	public function getGoodsList(){

		$result = $this -> Goods_model -> getList();

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		$json = array('list' => $result);
		echo json_encode($json);

	}

	public function signupOk(){

		$item = $this -> input -> post('item');
		$model = $this -> input -> post('model');

		$model === 'adminMember' ? $result = $this -> AdminMember_model -> signupOk($item) : '';
		$model === 'member' ? $result = $this -> Member_model -> signupOk($item) : '';

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($result);

	}

	public function deleteMainItem(){

		$index = array(
			'id' => $this -> input -> post('id'),
			'uploadedFileId' => $this -> input -> post('uploadedFileId')
		);

		$result = $this -> AdminMember_model -> deleteMainItem($index);

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		$json = $result;
		echo json_encode($json);
	}

	public function saveOrder(){

		$list = $this -> input -> post('list');
		$result = $this -> AdminMember_model -> saveOrder($list);

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($result);
	}
}
