<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
		$data['title'] = 'Users items';
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
{
    $data['users_item'] = $this->users_model->get_users($slug);

    if (empty($data['users_item']))
    {
        show_404();
    }

    $data['u_type'] = $data['users_item']['u_type'];

    $this->load->view('templates/header', $data);
    $this->load->view('users/view', $data);
    $this->load->view('templates/footer');
}
}