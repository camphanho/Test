<?php
/**
 * Created by PhpStorm.
 * User: namtu
 * Date: 3/19/2018
 * Time: 3:59 PM
 */

class Change_pass extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load form helper
		$this->load->helper('form');
		//load form validation lib
		$this->load->library('form_validation');

		$this->load->model('Maccount');
		$this->load->model('common/Msendmail');
	}

	public function index()
	{
		$this->load->view('web/Vcreatenewpass');
	}

	public function updatepsw()
	{
		$new_pass = $this->input->post('new_pass');
		$re_new_pass = $this->input->post('re_new_pass');
		//nếu để trống
		if (strlen($new_pass) == 0 || strlen($re_new_pass) == 0) {
			$data['message'] = 'Vui lòng nhập đầy đủ, không được bỏ trống';
			$this->load->view('web/Vcreatenewpass', $data);
		}//Nếu độ dài mật khẩu mới nhỏ hơn 6 ký tự
		else if (strlen($new_pass) < 6) {
			$data['message'] = 'Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.';
			$this->load->view('web/Vcreatenewpass', $data);
		} // Ngược lại nếu mật khẩu mởi nhập lại không khớp
		else if ($new_pass != $re_new_pass) {
			$data['message'] = 'Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock.';
			$this->load->view('web/Vcreatenewpass', $data);
		} // Ngược lại
		else {
			if ($this->Maccount->updatepass($new_pass, $_GET['id']) == true) {
				// Hiển thị thông báo và tải lại trang
				$data['message_display'] = "Create new password successfully";
				$this->load->view('web/Vlogin', $data);
			}
		}

	}
}
