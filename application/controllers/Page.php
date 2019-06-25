<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('logged_in') !== true) {
			redirect('login');
		}
	}
	function index() {
		//Allowing akses to admin only
		if ($this->session->userdata('level') === '1') {
			$this->load->view('dashboard');
		} else {
			echo "Access Denied";
		}
	}
	function staff() {
		//Allowing akses to staff only
		if ($this->session->userdata('level') === '2') {
			$this->load->view('dashboard');
		} else {
			echo "Access Denied";
		}
	}
	function user() {
		//Allowing akses to author only
		if ($this->session->userdata('level') === '3') {
			$this->load->view('dashboard');
		} else {
			echo "Access Denied";
		}
	}
}
