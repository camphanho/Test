<?php
include ("phpmailer/class.smtp.php");
include ("phpmailer/class.phpmailer.php");

	class Msendmail extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function sendmailresetpsw($to, $id)
        {

            $nFrom = "2nfsoftware";//ten ng gui
            $mFrom = "phanhocam_t59@hus.edu.vn";//email ng gui
            $mPass = "18021996";//password
            $nTo = "Ten nguoi nhan";//ten ng nhan
            $mTo = $to;//email nguoi nhan
            $mail = new PHPMailer();
            $body = "<h1>Reset your password:</h1>
                     <p>Please click on the following link to reset your password.</p>
                     <a href='http://localhost/test/index.php/change_pass?id=$id'>Click here</a>
                     ";
            $title = "Forgot password";
            $mail->IsSMTP();
            $mail->CharSet  = "utf-8";
            $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";    // sever gui mail.
            $mail->Port       = 465;         // cong gui mail de nguyen
            //phan gui mail
            $mail->Username = $mFrom;//khai bao dia chi mail
            $mail->Password = $mPass;//khai bao mat khau
            $mail->SetFrom($mFrom, $nFrom);
            $mail->AddReplyTo("phanhcam_t59@hus.edu.vn", "Cam PH");
            $mail->Subject = $title;//tieu de mail
            $mail->MsgHTML($body);//noi dung chinh email
            $mail->AddAddress($mTo, $nTo);
            //thuc thi gui mail
            if(!$mail->Send())
            {
                return 0;
            }
            else
            {
                return 1;
            }
        }
	}