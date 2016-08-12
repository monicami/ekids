<?php
class Exercise_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function get_exercise($e_level = FALSE)
	{
		if ($e_level === FALSE)
		{
			$query = $this->db->get('exercise');
		} else
		{
			$query = $this->db->query("select * from exercise where e_level='".$e_level."'");
		}
		return $query->result_array();
	}

	public function get_grade()
	{
		$query = $this->db->query('select e_level, count(e_level) as "g_count" from exercise group by e_level');
		return $query->result_array();
	}
}