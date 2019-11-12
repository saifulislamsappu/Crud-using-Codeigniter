<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	

	public function home()
	{

		$name= $this->input->post('name',true);
		$password= $this->input->post('password',true);
		$this->load->model('Admin');
		$result= $this->Admin->login($name,$password);
		$sData= array();

		if($result) {
			$sData['id']= $request->$id;
			$sData['name']= $request->$name;
			$this->session->set_userdata($sData);
			redirect('dashboard');
		}
		else {
			$sData['message']= 'Wrong Credentials!!';
			$this->session->set_userdata($sData);
			redirect(base_url());
		}

	}

	public function logout() {
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$sData['message']= 'Logout Successfully!!';
		$this->session->set_userdata($sData);
		redirect(base_url());
	}
    
    public function dashboard()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/dashboard','',true);
		$this->load->view('index',$data);
	}

    public function addStudent()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/addStudent','',true);
		$this->load->view('index',$data);
	}
    
	public function saveStudent()
	{
		$this->Admin->saveStudent();
		$notification= array();
		$notification['message']= 'Student Added Successfully!';
		$this->session->set_userdata($notification);
		redirect('add-student');
	}

    public function manageStudent()
	{
		$data= array();
		$data['allStudentsinfo']= $this->Admin->allStudentsinfo();
        $data['dashboard']= $this->load->view('pages/manageStudent',$data,true);
		$this->load->view('index',$data);
		
	}
    
    public function editStudent($id)
	{
        $data= array();
		$data['editStudent']= $this->Admin->editStudent($id);
		$data['dashboard']= $this->load->view('pages/editStudent',$data,true);
		$this->load->view('index',$data);
	}
	
	public function updateStudent()
	{
        $this->Admin->updateStudent();
		$notification= array();
		$notification['message']= 'Data Updated Successfully!';
		$this->session->set_userdata($notification);
		redirect('manage-student');
	}
	
	public function deleteStudent($id)
	{
        $this->Admin->deleteStudent($id);
		$notification= array();
		$notification['message']= 'Student Deleted Successfully!';
		$this->session->set_userdata($notification);
		redirect('manage-student');
	}
	
	public function editAdmin()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/editAdmin','',true);
		$this->load->view('index',$data);
	}
	
	
}
