<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this -> load ->model('Member_model');
		$this -> load ->helper('url');
		$this -> load ->library('form_validation');
	}

	public function index() {

		$this -> login();

	}

	public function login() {

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[20]');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {
			$email = trim($this->input->post('email', TRUE));
			$password = trim($this->input->post('password', TRUE));
			$option = trim($this->input->post('optionsRemember', TRUE));

			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}

			$user = $this->Member_model->getByEmail($email);

			//로그인 성공
			if(	$user != FALSE && $email == $user->email && password_verify($password, $user->password)) {
				$newdata = array(
						'email' => $user -> email,
						'logged_in' => TRUE,
						'saveAddress' => FALSE
				);

				if($option == 'Y'){
					$newdata['saveAddress'] = TRUE;
					$this->session->sess_expiration = 3600*48;
				}

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

	public function loginNohash() {
		//봉인
		return false;

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[Member.email]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[16]');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {
			$email = trim($this->input->post('email', TRUE));
			$password = trim($this->input->post('password', TRUE));
			$option = trim($this->input->post('optionsRemember', TRUE));

			$member_data = array(
				'email' => $email,
				'password' => $password
			);

			$result = $this -> Member_model -> login($member_data);

			//로그인 성공
			if ($result) {

				$newdata = array(
					'email' => $result -> email,
					'logged_in' => TRUE,
					'saveAddress' => FALSE
				);

				if($option == 'Y'){
					$newdata['saveAddress'] = TRUE;
					$this->session->sess_expiration = 3600*48;
				}

				$this -> session -> set_userdata($newdata);

				redirect('/');

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

	public function logout() {

		$this -> session -> sess_destroy();

		redirect('/');

		exit;

	}

	public function signup() {

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[Member.email]');
		$this->form_validation->set_rules('name', '이름', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[16]|matches[re_password]');
		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
		$this->form_validation->set_rules('phone', '연락처', 'required');

		//입력폼 유효
		if ($this -> form_validation -> run() == TRUE) {

			$email = trim($this->input->post('email', TRUE));
			$name = trim($this->input->post('name', TRUE));
			$password = trim($this->input->post('password', TRUE));
			$phone = trim($this->input->post('phone', TRUE));

			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}

			$hash = password_hash($password, PASSWORD_BCRYPT);

			$member_data = array(
					'email' => $email,
					'name' => $name,
					'password' => $hash,
					'phone' => $phone
			);

			$result = $this -> Member_model -> signup($member_data);

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
}
