<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this -> load ->model('AdminMember_model');
		$this -> load ->helper('url');
		$this -> load ->library('form_validation');
	}

	public function signup() {

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[AdminMember.email]');
		$this->form_validation->set_rules('name', '이름', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[20]');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {

			$email = trim($this->input->post('email', TRUE));
			$name = trim($this->input->post('name', TRUE));
			$password = trim($this->input->post('password', TRUE));

			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}

			$hash = password_hash($password, PASSWORD_BCRYPT);

			$member_data = array(
					'email' => $email,
					'name' => $name,
					'password' => $hash
			);

			$result = $this -> AdminMember_model -> signup($member_data);

			//회원가입 성공
			if ($result) {
				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array("result"=> 'success'));
			}else{
				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array("result"=> 'fail'));
			}
		} else {
			$this->output->set_header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array("result"=> 'wrong'));
		}

	}

	public function signin() {

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[20]');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {
			$email = trim($this->input->post('email', TRUE));
			$password = trim($this->input->post('password', TRUE));

			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}

			$user = $this->Member_model->getByEmail($email);

			//로그인 성공
			if(	$user != FALSE && $email == $user->email && password_verify($password, $user->password)) {
				$newdata = array(
						'adminEmail' => $user -> email,
						'adminLogged_in' => TRUE
				);

				$this->session->sess_expiration = 3600*24;

				$this -> session -> set_userdata($newdata);

				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array("result"=> 'success'));
				exit;

			//로그인 실패
			} else {
				$this->output->set_header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array("result"=> 'wrong'));
				exit;
			}
		//입력폼 비유효
		} else {
			$this->output->set_header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array("result"=> 'fail'));
		}
	}
}
