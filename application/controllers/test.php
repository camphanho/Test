<?php
class test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view("web/myProfile");
    }
    function check()
    {
        if($this->input->post('btn1'))
        {
            echo "java";
        }elseif ($this->input->post('btn2')){
            echo "php";
        }elseif ($this->input->post('btn3')){
            echo "android";
        }
    }
    function dashboard()
    {
        //$this->load->view("web/dashboard");
        $this->load->view("cam/dashboard");
    }
    function user()
    {
        $this->load->view("web/user");
    }
    function tablelist()
    {
        $this->load->view("web/tablelist");
    }
    function typography()
    {
        $this->load->view("web/typography");
    }
    function icons()
    {
        $this->load->view("web/icons");
    }
    function maps()
    {
        $this->load->view("web/maps");
    }
    function notification()
    {
        $this->load->view("web/notification");
    }
    function strtest()
    {
        $a = "ahihi haha";
        $b = "ahihi haha";
        echo strcmp($a, $b);
    }
    function logout()
    {
        $this->load->view("web/Vlogin");
    }
}