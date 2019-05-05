<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class student extends CI_Model { // คลาส Model_template สืบทอดคุณสมบัติของ CI_Model
	
	public function getAllStudent() // สร้าง Method ชื่อว่า getAllTemplate
	{ 
		$query = $this->db->query('SELECT * FROM stu_infor'); 
		if($query->num_rows() > 0 ) {
			return $query->result_array(); //$query->result();
		} else {
			return array();
		}
    }
    
    public function addStudent($student)
    {
        $sql="
        INSERT INTO stu_infor (prefixname, firstname, lastname, stampdate, id_stu, code, fly, shoot) 
        VALUES('".$student['prefixname']."', '".$student['firstname']."', '".$student['lastname']."', 
        '".$student['stampdate']."', '".$student['id_stu']."' ,'".$student['code']."','".$student['fly']."','".$student['shoot']."')";

        $query = $this->db->query($sql);

        return $query;
    }
	
}