<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function course_info($course_id)
	{
		$course_info = $this->course->get_course($course_id);
		$course_tests = $this->course->get_course_test($course_id); 
		$this->load->view('course_page', array(
			"course_info" => $course_info,
			"course_tests" => $course_tests
			));
		//redirect('/course_page');
		//var_dump($course_info);
		//die();
	}

	public function course_page($course_id)
	{
		var_dump("MADE IT");
		/* $this->load->view('course_page', 
			array(
				"course_info" => $course_info
			)
		); */
	}
}

/* End of file classes.php */
/* Location: ./application/controllers/classes.php */