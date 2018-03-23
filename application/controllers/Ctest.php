<?php
/**
 * Created by PhpStorm.
 * User: namtu
 * Date: 3/9/2018
 * Time: 2:42 PM
 */

class Ctest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Mexams");
    }
    function index()
    {
        $this->load->view("web/Vtest");
    }
    function getContent()
    {
        $data['content'] = $this->Mexams->getQA(1);
//        var_dump($data);
//        foreach ($data as $key => $value)
//        {
//            echo $value->contentQ;
//            $dt = json_decode($value->contentAns, true);
//            foreach ($dt as $k=>$v)
//            {
//                foreach ($v as $a)
//                {
//                    echo $a;
//                }
//            }
//        }
        $this->load->view("web/Vtest", $data);
    }
    function testex(){
        $ex = $this->Mexams->getdetailexams(1);
        foreach ($ex as $key=>$value)
        {
            $dt['listid'] = json_decode($value->detailexams, true);
        }
//        foreach ($dt as $k=>$v){
//            $data['content'] = $this->Mexams->getQA($v);
//
//        }
        $this->load->view("web/Vtest", $dt);
    }
}