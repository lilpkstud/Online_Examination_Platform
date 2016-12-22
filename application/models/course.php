<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	public function get_course($course_id)
	{
		$query = "SELECT * FROM courses WHERE course_id = $course_id";
		return $this->db->query($query)->row_array();
	}

	public function get_course_test($course_id)
	{
		$query= "SELECT * FROM tests WHERE course_id = $course_id";

		return $this->db->query($query)->result_array();
	}
}

/* End of file course.php */
/* Location: ./application/models/course.php */