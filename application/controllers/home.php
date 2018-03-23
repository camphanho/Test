<?php
class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        if($this->input->post('dashboard'))
        {
            $data['layout'] = "web/dashboard";
            $this->load->view('web/home.php', $data);
        }
    }
}