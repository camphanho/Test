<?php
/**
 * Created by PhpStorm.
 * User: PHC
 * Date: 3/2/2018
 * Time: 2:34 PM
 */
class Question extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mquestion');
    }
    function index()
    {
        $data['cid']= $this->Mquestion->categoryid();
        $data['eid']= $this->Mquestion->nvid();
        $this->load->view("web/addQ",$data );
        //$this->load->view("web/test1");
    }
    function add()
    {
        $data['categoryid'] = $this->input->post("categoryid");
        $data['typeofQ'] = $this->input->post("typeofQ");
        $data['quantity'] = $this->input->post("numans");
        $data['contentQ'] = $this->input->post("contentq");
        $data['contentAns'] = $this->input->post("contenta");
        $data['level'] = $this->input->post("level");
        $data['author'] = $this->input->post("author");
        $data['active'] = $this->input->post("active");
        if($this->Mquestion->checkcontent($data['contentQ']))
        {
            $this->Mquestion->insert($data);
        }else{
            echo "Cau hoi da ton tai";
        }


    }


}