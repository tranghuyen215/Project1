<?php
require_once('PHPMailer_5.2.4/class.phpmailer.php');

class Email {

	
	private $objMailer;

	
	
	
	
	public function fetchEmail($case = null, $array = null) {
	
		if (!empty($case)) {
			
			if (!empty($array)) {			
				foreach($array as $key => $value) {
					${$key} = $value;
				}			
			}
			
			ob_start();
			require_once(EMAILS_PATH.DS.$case.".php");
			$out = ob_get_clean();
			return $this->wrapEmail($out);
		
		}
	
	}
	
	
	
	
	
	
	
	
	
	
	public function wrapEmail($content = null) {
		if (!empty($content)) {
			return "<div style=\"font-family:Arial,Verdana,Sans-serif;font-size:12px;color:#333;line-height:21px;\">{$content}</div>";
		}
	}
	
	












	public function process($case = null, $array = null) {
	
		if (!empty($case)) {
		
			switch($case) {
				
				case 1:

			    include('class.smtp.php');
			    $nFrom = "Xác nhận tài khoản";    //mail duoc gui tu dau, thuong de ten cong ty ban
			    $mFrom = 'duonghuyentrang1505@gmail.com';  //dia chi email cua ban 
			    $mPass = 'duonghuyentrang';       //mat khau email cua ban
			    $nTo = 'trang'; //Ten nguoi nhan
			    // $mTo = 'levantungat@gmail.com';   //dia chi nhan mail
			    $mTo = $array['email']; 
			    $this->objMailer             = new PHPMailer();
			    // add url to the array
				$link  = "<a href=\"".SITE_URL."/?page=activate&code=";
				$link .= $array['hash'];
				$link .= "\">";
				$link .= SITE_URL."/?page=activate&code=";
				$link .= $array['hash'];
				$link .= "</a>";
				$array['link'] = $link;
									
				
									
				
				$this->objMailer->AddAddress(
				$array['email'], 
				$array['first_name'].' '.$array['last_name']
				);

			       // Noi dung email
			    $this->objMailer->IsSMTP();             
			    $this->objMailer->CharSet  = "utf-8";
			    $this->objMailer->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
			    $this->objMailer->SMTPAuth   = true;    // enable SMTP authentication
			    $this->objMailer->SMTPSecure = "ssl";   // sets the prefix to the servier
			    $this->objMailer->Host       = "smtp.gmail.com";    // sever gui mail.
			    $this->objMailer->Port       = 465;         // cong gui mail de nguyen
			    // xong phan cau hinh bat dau phan gui mail
			    $this->objMailer->Username   = $mFrom;  // khai bao dia chi email
			    $this->objMailer->Password   = $mPass;              // khai bao mat khau
			    $this->objMailer->SetFrom($mFrom, $nFrom);
			    $this->objMailer->AddReplyTo('duonghuyentrang1505@gmail.com', 'dodomobile'); //khi nguoi dung phan hoi se duoc gui den email nay
			    $this->objMailer->Subject = "Kích hoạt tài khoản";// tieu de email 
			    $this->objMailer->MsgHTML($this->fetchEmail($case, $array));// noi dung chinh cua mail se nam o day.
			    $this->objMailer->AddAddress($mTo, $nTo);

				break;
			}

			// send email
			if ($this->objMailer->Send()) {
				$this->objMailer->ClearAddresses();
				return true;
			}
			return false;


		}
	
	
	}







}






