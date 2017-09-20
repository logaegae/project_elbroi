<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this -> load -> model('UploadedFiles_model');

	}

	public function upload(){

		$json = array();

		$config['upload_path']          = './static/uploads';
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

		$code = $this -> input -> post('code');
		if($code){
			$option['code'] = $code;
		}

		$result = $this -> UploadedFiles_model -> uploadList($option);
		if($result){

			$json['message'] = 'message'.$result;

		}else{
			$json['success'] = false;
			$json['message'] = '기록 실패';
		}
    }

		$this->output->set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($json);

	}

	public function getMainList(){

		$result = $this -> UploadedFiles_model -> getMainList();
		$this->output->set_header('Content-Type: application/json; charset=utf-8');

		$json = array('list' => $result);
		echo json_encode($json);

	}
	public function siteUpload(){
		upload();
	}
}
