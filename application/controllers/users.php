<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('login_page');
	}

	public function login()
	{
		// Username Validation
		
		//Password Validation

		//Check if the user is registered
		$login_user = $this->user->login_process($this->input->post());

		//Check if the user is an student, teachers, or admin 
		if($login_user['user_level'] == 2)
		{
			//Go to the Admin Dashboard
		}
		else if($login_user['user_level'] == 1) 
		{

			//Go to the Teacher Dashboard
			$courses = $this->user->get_all_teacher_courses($login_user);
			$this->load->view('teacher_dashboard', 
				array(
					"teacher" => $login_user,
					"courses" => $courses
				));
		}
		else if($login_user['user_level'] == 0)
		{
			//Go to the Student Dashboard
			$courses = $this->user->get_all_student_courses($login_user);
			$this->load->view('student_dashboard', 
				array(
					"student" => $login_user,
					"courses" => $courses
				));
		}
		else
		{
			$this->load->view('/');
		}
		//var_dump($this->input->post());
	}
}

/* End of file users.php */
/* Location: ./application/controllers/welcome.php */