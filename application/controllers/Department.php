<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

        public function index()
	{
                $this->load->model('Department_Model');
                $this->load->model('Employee_Model');
                $data['emp'] = $this->Employee_Model->list_employee();
                $data['dept'] = $this->Department_Model->list_department();
                $this->load->view('ShowDepartment_View',$data);
        }
        public function insert(){
                if($this->input->post("Insert") != NULL){
                        $this->load->model("Department_Model");
                        $this->Department_Model->insert_department();
                        redirect("department");
                }else{
                        $this->load->view('InsertDepartment_View');
                }
        }
        public function edit(){
                if($this->input->post("Edit") != NULL){
                        $this->load->model("Department_Model");
                        $this->Department_Model->edit_department();
                        redirect("department");
                }else{
                        $dnumber = $this->uri->segment(3);
                        $this->load->model('Department_Model');
                        $data['dept'] = $this->Department_Model->list_department_by_dnumber($dnumber);
                        $this->load->view('EditDepartment_View',$data);

                }
                
        }
        public function delete(){
                $dnumber = $this->uri->segment(3);
                $this->load->model('Department_Model');
                $this->Department_Model->delete_department($dnumber);
                redirect("department");
        }
        public function insert_employee(){
                if($this->input->post("Insert") != NULL){
                        $this->load->model("Employee_Model");
                        $this->Employee_Model->insert_employee();
                        redirect("department");
                }else{
                        $this->load->model('Department_Model');
                        $data['dept'] = $this->Department_Model->list_department();
                        $this->load->view('InsertEmployee_View',$data);
                }
        }
        public function edit_employee(){
                if($this->input->post("Edit") != NULL){
                        $this->load->model("Employee_Model");
                        $this->Employee_Model->edit_employee();
                        redirect("department");
                }else{
                        $ssn = $this->uri->segment(3);
                        $this->load->model('Employee_Model');
                        $data['emp'] = $this->Employee_Model->list_employee_by_dnumber($ssn);
                        $this->load->model('Department_Model');
                        $data['dept'] = $this->Department_Model->list_department();
                        $this->load->view('EditEmployee_View',$data);

                }
                
        }
        public function delete_employee(){
                $ssn = $this->uri->segment(3);
                $this->load->model('Employee_Model');
                $this->Employee_Model->delete_employee($ssn);
                redirect("department");
        }
        //------------------------- test api -------------------------//
        public function api_department(){
                $dnumber = $this->uri->segment(3);
                if($dnumber != NULL){
                        //echo $dnumber;
                        $this->load->model('Department_Model');
                        $data['emp'] = $this->Department_Model->list_department_api_by_dnumber($dnumber);
                        $this->load->view('ShowDepartmentApi_View',$data);
                }else{
                        $this->load->model('Department_Model');
                        $data['emp'] = $this->Department_Model->list_department_api();
                        $this->load->view('ShowDepartmentApi_View',$data);
                }
        }
}