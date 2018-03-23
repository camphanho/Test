<?php
class listexamacc extends CI_Model
{
    protected $_table1 = "account_exams";
    protected $_table2 = "accounts";
    protected $_table3 = "exams";
    public function __construct()
    {
        parent::__construct();
    }
    function loadexams()
    {

    }
}