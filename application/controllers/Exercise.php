<?php
class Exercise extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('exercise_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['exercise'] = $this->exercise_model->get_grade();
		$data['title'] = 'exercise items';
        $this->load->view('templates/header', $data);
        $this->load->view('exercise/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($e_level = NULL)
{
    $data['exercise_items'] = $this->exercise_model->get_exercise($e_level);

    if (empty($data['exercise_items']))
    {
        show_404();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('exercise/view', $data);
    $this->load->view('templates/footer');
}
}