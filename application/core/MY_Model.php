<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	var $tablename;
	var $pkey;
	public function __construct() {
		parent::__construct();
	}
	public function get_by_id($id) {
		$query = $this->db
			->from($this->tablename)
			->where($this->pkey, $id)
			->get();

		return $query->row();
	}
	public function insert($data) {
		return $this->db->insert($this->tablename, $data);
	}
	public function update($id, $data) {
		$this->db->update($this->tablename, $data, array($this->pkey => $id));
	}
	public function delete($id) {
		$this->db->delete($this->tablename, array($this->pkey => $id));
	}
}
