<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

public function get_users($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}

	$query = $this->db->get_where('users', array('u_type' => $slug));
	return $query->row_array();
}
}