<?php
class Visits_model extends CI_Model {
	public function Visits_model() {
		parent::Model();
	}

	public function get_visit($id) {
		if($id != FALSE) {
			$query = $this->db->get_where('visits', array('id' => $id));
			return $query->row_array();
		}
		else {
				return FALSE;
		}
	}

	public function get_all_visit() {
		if($id != FALSE) {
			$query = $this->db->get('visits');
			return $query->row_array();
		}
		else {
				return FALSE;
		}
	}

	public function get_visit($refernceNumber) {
		if($id != FALSE) {
			$query = $this->db->get_where('visits', array('refernceNumber' => $id));
			return $query->row_array();
		}
		else {
				return FALSE;
		}
	}

}
?>