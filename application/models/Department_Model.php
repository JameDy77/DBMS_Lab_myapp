<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_Model extends CI_Model {

	public function list_department(){
		$result = $this->db->get('Department');
		return $result->result_array();
	}
	public function insert_department(){
		$data = array (
			'dnumber' => $this->input->post("dnumber"),
			'dname'   => $this->input->post("dname")
		);
		$this->db->insert('Department', $data);
	}
	public function list_department_by_dnumber($dnumber){
		$this->db->where('dnumber',$dnumber);
		$result = $this->db->get('Department');
		return $result->result_array();
	}
	public function edit_department(){
		$data = array (
			'dname'   => $this->input->post("dname")
		);
		$this->db->where('dnumber',$this->input->post("dnumber"));
		$this->db->update('Department', $data);
	}
	public function delete_department($dnumber){
		$this->db->where('dnumber',$dnumber);
		$this->db->delete('Department');
	}
	//------------------------- test api -------------------------//
	public function list_department_api(){
		$result = $this->db->get('Department');
		$result_json = $result->result_array();
		return json_encode($result_json);
		//$re = withJson(array('status' => 'true','result'=>$result_json),200);
		//return $re;
		//return $response->withJson(array('status' => 'Faculty Not Found'),422);
	}
	public function list_department_api_by_dnumber($dnumber){
		$this->db->where('dnumber',$dnumber);
		$result = $this->db->get('Department');
		$result_json = $result->result_array();
		if(json_encode($result_json) != NULL){
			return json_encode($result_json);
		}else{
			//return json_encode($result_json->(array('status' => 'Faculty Not Found'));
		}
	}
}