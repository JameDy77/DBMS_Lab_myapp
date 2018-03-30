<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Model extends CI_Model {

	public function list_employee()
	{
        $result = $this->db->get('Employee');
        return $result->result_array();
	}
	public function insert_employee(){
		$data = array (
			'ssn' 	=> $this->input->post("ssn"),
			'name' 	=> $this->input->post("name"),
			'dno'	=> $this->input->post("dno")
		);
		$this->db->insert('Employee', $data);
	}
	public function list_employee_by_dnumber($ssn){
		$this->db->where('ssn',$ssn);
		$result = $this->db->get('Employee');
		return $result->result_array();
	}
	public function edit_employee(){
		$data = array (
			'name'	=> $this->input->post("name"),
			'dno'	=> $this->input->post("dno")
		);
		$this->db->where('ssn',$this->input->post("ssn"));
		$this->db->update('Employee', $data);
	}
	public function delete_employee($ssn){
		$this->db->where('ssn',$ssn);
		$this->db->delete('Employee');
	}
}