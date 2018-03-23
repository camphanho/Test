<?php
/**
 * User: PHC
 * Date: 3/9/2018
 * Time: 3:23 PM
 */

class Mexams extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getdetailexams($idexams)
	{
		$query = "SELECT * FROM details INNER JOIN exams ON details.idexams = exams.id WHERE idexams = ".$idexams;
		$data = $this->db->query($query);
		return $data->result();
	}
	function getQA($v)
	{
		$this->db->select("contentQ, contentAns");
		$this->db->where("idQ",$v);
		$query = $this->db->get($this->_table);
		return $query->result();
	}
	function random_question_level($categoryid, $level, $num_lv)
	{
		$query = "SELECT contentQ, contentAns FROM questions WHERE categoryid = ".$categoryid." AND level = ".$level." LIMIT ".$num_lv;
		$data = $this->db->query($query);
		return $data->result();
	}


}