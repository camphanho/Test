<?php

class Login extends CI_Controller
{
	protected $data;

	public function __construct()
	{
		parent::__construct();
		//load form helper
		$this->load->helper('form');
		//load form validation lib
		$this->load->library('form_validation');
		//load session lib
		$this->load->library('session');
		//load db
		$this->load->model('Maccount');
		//load model sendmail
		$this->load->model('common/Msendmail');
	}

	//show login page
	public function index()
	{
		$this->load->view('web/Vlogin');
	}

	//show forgot pass page
	public function forgotpass()
	{
		$this->load->view('Vforgot');
	}

	//check for user login process
	public function user_login_process()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			if (isset($this->session->userdata['logged_in'])) {
				$this->load->view('testgiaodien/profile');
			} else {
				$this->load->view('web/Vlogin');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->Maccount->login($data);
			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->Maccount->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'name' => $result[0]->name,
						'avata' => $result[0]->avata,
						'position' => $result[0]->position
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('testgiaodien/profile');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('web/Vlogin', $data);
			}
		}
	}

	// Logout from admin page
	public function logout()
	{

		// Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('web/Vlogin', $data);

	}

	public function edit()
	{

	}
		public function check()
		{
			if($this->input->post('ok')){
				$u = $this->input->post('uname');
				$p = $this->input->post('psw');
				if($this->Maccount->checkAccount($u, $p) == TRUE){
					$roles = $this->Maccount->checkroles($u, $p);
					foreach ($roles as $key)
					{
						$data['roles'] = json_decode($key->zonelist);
					}
					//var_dump($data['roles']);
					$data['name'] = $this->Maccount->getName($u, $p);
					// $data['name'];
					$this->load->view("web/user",$data);
				}else
				{
					$data['message'] = "sai user hoặc mật khẩu";
					$this->load->view("web/Vlogin", $data);
				}
			}
		}
	function email()
	{
		$data['message'] = '';
		$this->load->view('web/Vforgotpass', $data);
	}

	function sendmailresetpsw()
	{
		$email = $this->input->post('emailfp');
		$result = $this->Maccount->getId($email);
		if ($result != false) {
			$id = $result[0]->id;
			$a = $this->Msendmail->sendmailresetpsw($email, $id);
			if($a == 1)
			{
				$data['message_display'] = 'Your confirmation email sent, please check your mail box';
				$this->load->view('web/Vlogin', $data);
			}
			else
			{
				$data['message'] = 'Can not send email, please check again';
				$this->load->view('web/Vforgotpass', $data);

			}
		}
		else
		{
			$data['message'] = 'Email not found';
			$this->load->view('web/Vforgotpass', $data);
		}

	}
}