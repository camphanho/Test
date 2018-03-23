<?php
	class Mquestion extends CI_Model
	{
		protected $_table = "Questions";
        protected $_table1 = "categories";
        protected $_table2 = "accounts";
		function __construct()
		{
			parent::__construct();
		}
		function insert($data)
		{
			$this->db->insert($this->_table, $data);
			echo "success";
		}
		function update($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update($this->_table, $data); 
		}
		function delete($id)
		{
			$this->db->delete($this->_table, array('id' => $id)); 
		}
		function categoryid()
        {
            $this->db->select('id');
            $query = $this->db->get($this->_table1);
            return $query->result();
        }
        function nvid()
        {
            $this->db->select('id');
            $query = $this->db->get($this->_table2);
            return $query->result();
        }
        function checkcontent($a)
        {
            $this->db->select('contentQ');
            $query = $this->db->get($this->_table);
            $data = $query->result();
            $a = $this->formatString($a);
            $count = 0;
            //echo "a= ".$a;
            foreach ($data as $key)
            {
                if( strcmp($a, $this->formatString($key->contentQ)) == 0)
                {
                    $count++;
                }

               // echo strcmp($a, $this->formatString($key->contentQ));
                //echo strlen($this->formatString($key->contentQ))."--".strlen($a);

            }
            if($count == 0)
            {
                return true;
            }else{
                return false;
            }
        }
        function formatString($str, $type = null){
            // Dua tat ca cac ky tu ve dang chu thuong
            $str	= strtolower($str);

            // Loai bo khoang trang dau va cuoi chuoi
            $str	= trim($str);

            // Loai bo khoang trang du thua giua cac tu

            $array 	= explode(" ", $str);
            foreach($array as $key => $value){
                if(trim($value) == null) {
                    unset($array[$key]);
                    continue;
                }

                // Xu ly cho danh tu
                if($type=="danh-tu") {
                    $array[$key] = ucfirst($value);
                }
            }

            $result = implode(" ", $array);

            // Chuyen ky tu dau tien thanh chu hoa
            $result	= ucfirst($result);

            return $result;
		}
	}

