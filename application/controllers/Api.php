<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this -> load -> model('SiteImage_model');
		$this -> load -> model('Goods_model');
		$this -> load -> library('form_validation');

	}

	public function upload($folder,$code,$updateId,$goodsId){

		$json = array();

		$config['upload_path']          = './static/uploads/'.$folder;
    	$config['allowed_types']        = 'gif|jpg|png';
		$config['file_ext_tolower']     = TRUE;
    	$config['max_size']             = 1024*1024*2;
    	$config['max_width']            = 1920;
    	$config['max_height']           = 1080;
		$config['encrypt_name']         = TRUE;

		$this -> load -> library('upload', $config);
		$this -> upload -> initialize($config);

		if ( ! $this->upload->do_upload('file') ){

	    	$json = array('error' => true, 'message' => $this->upload->display_errors());

		}else{

		    $upload_details = $this -> upload -> data();
			$json = array('success' => true, 'message' => '전송이 완료되었습니다', 'newfilename' => $upload_details['file_name']);

			$option = array(
				'url' => $config['upload_path'].'/'.$upload_details['file_name']
			);

			if(!empty($code) && !empty($updateId)){
				$option['code'] = $code;
				$option['updateId'] = $updateId;
			}
			if(!empty($goodsId)){
				$option['goodsId'] = $goodsId;
			}

			$result = $this -> SiteImage_model -> uploadList($option);
			if($result){

				$json['message'] = '상품이 등록되었습니다';

			}else{
				$json['success'] = false;
				$json['message'] = '기록 실패';
			}
	    }

		return $json;
	}

	public function uploadSiteImage(){

		$code = $this -> input -> post('code');
		$updateId = $this -> input -> post('updateId');

		$json = $this -> upload('siteImage',$code,$updateId,null);

		$this->output->set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($json);

	}

	public function getMainList(){

		$result = $this -> SiteImage_model -> getMainList();

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		$json = array('list' => $result);
		echo json_encode($json);

	}

	public function deleteMainItem(){

		$index = array(
			'id' => $this -> input -> post('id'),
			'uploadedFileId' => $this -> input -> post('uploadedFileId')
		);

		$result = $this -> SiteImage_model -> deleteMainItem($index);

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($result);
	}

	public function saveOrder(){

		$list = $this -> input -> post('list');
		$result = $this -> SiteImage_model -> saveOrder($list);

		$this -> output -> set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($result);
	}

	public function saveGood(){

		$this->form_validation->set_rules('name', '이름', 'trim|required');
		$this->form_validation->set_rules('code', '코드', 'trim|required');
		$this->form_validation->set_rules('datacode', '상품코드', 'trim|required');
		$this->form_validation->set_rules('updateId', '작성자', 'trim|required');
		$this->form_validation->set_rules('price', '가격', 'trim|required|integer');
		$this->form_validation->set_rules('detail', '상세정보', 'required');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {

			$code = trim($this->input->post('code', TRUE));
			$updateId = trim($this->input->post('updateId', TRUE));
			$datacode = trim($this->input->post('datacode', TRUE));
			$name = trim($this->input->post('name', TRUE));
			$price = trim($this->input->post('price', TRUE));
			$stock = trim($this->input->post('stock', TRUE));
			$detail = trim($this->input->post('detail', TRUE));

			$data = array(
				'code' => $datacode,
	            'name' => $name,
	            'delYn' => 'N',
	            'price' => $price,
				'detail' => $detail
			);

			!empty($stock) ? $data['stock'] = $stock : '';

			$result = $this -> Goods_model -> save($data);

			//상품등록 성공, 상품이미지 등록
			if ($result) {

				$json = $this -> upload('goodsImage',$code, $updateId, $result);

				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode($json);

			}else{
				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array("result"=> 'fail'));
			}
		} else {
			$this->output->set_header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array("result"=> 'wrong'));
		}


	}
}
