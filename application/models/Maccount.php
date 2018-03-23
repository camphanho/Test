<?php

class Maccount extends CI_Model
{
    protected $_table = 'accounts';

    function __construct()
    {
        parent::__construct();
    }

    public function login($data)
    {
        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function read_user_information($username)
    {

        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


    //lay ra zonelist cua user $u
/*    function checkroles($u, $p)
    {
//            $query = $this->db->query("select roles.zonelist
//                                      from roles inner join accounts_roles on roles.id = accounts_roles.rolesid
//                                      inner join accounts on accounts_roles.accountid = accounts.id
//                                      where accounts.username like '$u' and accounts.password like '$p'");
        $this->db->select("zonelist");
        $this->db->from('roles');
        $this->db->from('accounts');
        $this->db->from('accounts_roles');
        $this->db->where('roles.id', 'accounts_roles.rolesid');
        $this->db->where('accounts.id', 'accounts_roles.accountid');
        $this->db->where('accounts.username', $u);
        $this->db->where('account.password', $p);
        $query = $this->db->get();

        return $query->result();
    }*/

    function getName($u, $p)
    {
        $this->db->select("name");
        $this->db->where("username", $u);
        $this->db->where("password", $p);
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function getId($email)
    {
		$this->db->select('id');
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
		return $query->result();
    }
    public function updatepass($new_pass, $id)
	{
		$data = array(
			'password' => md5($new_pass)
 		);
		$this->db->where('id', $id);
		if($this->db->update($this->_table, $data)){
			return true;
		}
		else{
			return false;
		}
	}
}

