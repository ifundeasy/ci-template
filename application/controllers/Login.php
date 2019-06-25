<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user');
	}
	function index() {
		if (!$this->session->userdata('logged_in')) {
			$this->load->view('login');
		} else {
			$this->loadpage($this->session->userdata('level'));
		}
	}
	private function loadpage($level) {
		if ($level === '1') {
			redirect('page');
			// access login for staff
		} else if ($level === '2') {
			redirect('page/staff');
			// access login for author
		} else {
			redirect('page/user');
		}
	}
	function auth() {
		$username = $this->input->post('username', true);
		$password = md5($this->input->post('password', true));
		$validate = $this->user->validate($username, $password);
		if ($validate->num_rows() > 0) {
			$data = $validate->row_array();
			$name = $data['name'];
			$username = $data['username'];
			$email = $data['email'];
			$level = $data['level'];
			$sesdata = array(
				'name' => $name,
				'username' => $username,
				'email' => $email,
				'level' => $level,
				'logged_in' => true
			);
			$this->session->set_userdata($sesdata);
			// access login for admin
			$this->loadpage($level);
		} else {
			echo $this->session->set_flashdata('msg', 'Username or Password is wrong');
			redirect('login');
		}
	}
	function destroy() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
