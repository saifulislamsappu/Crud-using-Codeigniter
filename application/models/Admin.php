<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	public function login($name,$password)
	{
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('name',$name);
        $this->db->where('password',md5($password));
        $query_result= $this->db->get();
        $result= $query_result->row();
        return $result;
    }
    
    public function saveStudent() {
        $data= array();
        $data['student_name']= $this->input->post('student_name',true);
        $data['student_phone']= $this->input->post('student_phone',true);
        $data['student_id']= $this->input->post('student_id',true);
        $this->db->insert('students',$data);
    }
    
    public function allStudentsinfo() {
        $this->db->select('*');
        $this->db->from('students');
        $query_result= $this->db->get();
        $allStudentsInfo= $query_result->result();
        return $allStudentsInfo;
    }
    
    public function editStudent($id) {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('id',$id);
        $query_result= $this->db->get();
        $result= $query_result->row();
        return $result;
    }

    public function updateStudent() {
        $id= $this->input->post('id',true);
        $data= array();
        $data['student_name']= $this->input->post('student_name',true);
        $data['student_phone']= $this->input->post('student_phone',true);
        $data['student_id']= $this->input->post('student_id',true);
        $this->db->where('id',$id);
        $this->db->update('students',$data);
    }
    
    public function deleteStudent($id) {
        $this->db->where('id',$id);
        $this->db->delete('students');
    }

}
