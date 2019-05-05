<?php
defined('BASEPATH') or exit('No direct script access allowed');

class form extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('student'); // โหลดโมเดล model_template
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test()
	{
		$this->load->view('test');
	}

	public function loadStudent()
	{
		$this->load->view('student-form');
	}

	public function getStudent()
	{
		$student = $this->student->getAllStudent(); // เรียกใช้เมธอด getAllTemplate 
		print_r($student); // ดูข้อมูล array จากฐานข้อมูลโดยใช้คำสั่ง print_r
	}

	public function showStudent()
	{
		$data['student'] = $this->student->getAllStudent();
		$this->load->view('student-table',$data);
	}

	public function addStudent()
	{
		$student = $this->input->post();
		if(!empty($student)){
			$data = array(
				'prefixname' => $this->input->post('prefixname'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'stampdate' => $this->input->post('date'),
				'id_stu' => $this->input->post('idstudent'),
				'code' => $this->input->post('code'),
				'fly' => $this->input->post('fly'),
				'shoot' => $this->input->post('shoot'),
				);
				if(!isset($data['code'])){
					$data['code'] = 0;
				}
				if(!isset($data['fly'])){
					$data['fly'] = 0;
				}
				if(!isset($data['shoot'])){
					$data['shoot'] = 0;
				}
			$this->student->addStudent($data);
			$this->showStudent();
		}
	}

}
