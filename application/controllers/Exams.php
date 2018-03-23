<?php
/**
 * Load exam ra view
 * @author PHC
 */
/**
*
*/
class Exams extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mexams');
	}
	function index(){
		$this->load->view('web/Vexams');
	}
	function loadExams()
	{
		$detail = $this->Mexams->getdetailexams(2);
		var_dump($detail);

		$data_ratio = json_decode($detail[0]->ratio, true);
		$data_quantity = $detail[0]->quantity;
		$data_category = $detail[0]->categoryid;
		//số lượng câu hỏi từng lv
		$num_lv1 = round($data_ratio[0] * $data_quantity / 100);
		$num_lv2 = round($data_ratio[1] * $data_quantity / 100);
		$num_lv3 = round($data_ratio[2] * $data_quantity / 100);
		$num_lv4 = round($data_ratio[3] * $data_quantity / 100);
		$num_lv5 = round($data_ratio[4] * $data_quantity / 100);
		//lấy câu hỏi từng lv
		$data_lv1 = $this->Mexams->random_question_level($detail[0]->categoryid, 1, $num_lv1);
		$data_lv2 = $this->Mexams->random_question_level($detail[0]->categoryid, 2, $num_lv2);
		$data_lv3 = $this->Mexams->random_question_level($detail[0]->categoryid, 3, $num_lv3);
		$data_lv4 = $this->Mexams->random_question_level($detail[0]->categoryid, 4, $num_lv4);
		$data_lv5 = $this->Mexams->random_question_level($detail[0]->categoryid, 5, $num_lv5);

		foreach ($data_lv1 as $key => $value) {
			echo $value->contentQ;
			$dt = json_decode($value->contentAns, true);
           	foreach ($dt as $k=>$v)
           	{
               	foreach ($v as $a)
               	{
               		echo "<pre>";
                   	echo $a;
                   	echo "</pre>";
               	}
           	}
		}
		var_dump($data_lv1);
		var_dump($data_lv2);
		var_dump($data_lv3);
		var_dump($data_lv4);
		var_dump($data_lv5);

		echo $num_lv1."-".$num_lv2."-".$num_lv3."-".$num_lv4."-".$num_lv5;
		var_dump($data_ratio);


	}
}

