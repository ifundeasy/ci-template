<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	var $_ALLOWED = null;
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('language') == '') {
			$this->session->set_userdata('language', 'english');
		}
		$this->lang->load('all', $this->session->userdata('language'));
		//$this->sec_audit_trail->add(
		//	empty($_SESSION['name']) ? 'public' : $_SESSION['name'], uri_string(), 'request', $this->input->post()
		//);
		if (!empty($this->_ALLOWED)) {
			if (isset($_SESSION['role'])) {
				$current = $_SESSION['role'];
				if (!in_array($current, $this->_ALLOWED)) {
					$currentURL = current_url();
					$params = $_SERVER['QUERY_STRING'];
					$fullURL = $currentURL . '?' . $params;
					$this->session->sess_destroy();
					redirect(site_url('login'));
					exit;
				}
			} else {
				$currentURL = current_url();
				$params = $_SERVER['QUERY_STRING'];
				$fullURL = $currentURL . '?' . $params;
				$this->session->sess_destroy();
				redirect(site_url('login') . '?from=' . urlencode($fullURL));
			}
		}
	}
	public function view($view, $data = null) {
		$this->load->view("templates/header", $data);
		$this->load->view($view, $data);
		$this->load->view("templates/footer", $data);
	}
	public function formatNumber($number, $precision = 0) {
		$units = array('', 'K', 'M', 'T', 'B', 'Q');
		$number = max($number, 0);
		$pow = floor(($number ? log($number) : 0) / log(1024));
		$pow = min($pow, count($units) - 1);
		// Uncomment one of the following alternatives
		// $number /= pow(1024, $pow);
		// $number /= (1 << (10 * $pow));
		switch ($pow) {
			case 5:
				$number = $number / 1000000000000000;
				break;
			case 4:
				$number = $number / 1000000000000;
				break;
			case 3:
				$number = $number / 1000000000;
				break;
			case 2:
				$number = $number / 1000000;
				break;
			case 1:
				$number = $number / 1000;
				break;
			default:
				$number = $number;
		}

		return number_format(round($number, $precision)) . ' ' . $units[$pow];
	}
	public function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		return $string; // Replaces multiple hyphens with single one.
	}
}
