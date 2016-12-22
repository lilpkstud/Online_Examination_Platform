<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function login_process($post)
	{
		//var_dump($post);
		//var_dump('User Model Page');
		
		$query = "SELECT * FROM users WHERE users.username = ? AND users.password = ?";

		$values = array($post['username'], $post['password']);

		$user = $this->db->query($query, $values)->row_array();
		return $user; 
	}	

	public function get_all_teacher_courses($teacher)
	{
		$query = "SELECT Courses.*, Users.username FROM courses JOIN Users ON Users.user_id = Courses.student_id WHERE teacher_id =?";
		
		$values = $teacher['user_id'];

		return $this->db->query($query, $values)->result_array();
	}

	public function get_all_student_courses($student)
	{
		$query = "SELECT Courses.*, Users.username FROM courses JOIN Users ON Users.user_id = Courses.teacher_id WHERE student_id = ?";
		
		$values = $student['user_id'];

		return $this->db->query($query, $values)->result_array();
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */