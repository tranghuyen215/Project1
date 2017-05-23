<?php 
if (Login::isLogged(Login::$_login_admin)) {
	Helper::redirect(Login::$_dashboard_admin);
}

$objForm = new Form();
$objValid = new Validation($objForm);

if ($objForm->isPost('login_email')) {

	$objAdmin = new Admin();
	
	if ($objAdmin->isAdmin($objForm->getPost('login_email'), $objForm->getPost('login_password'))) {
		Login::loginAdmin($objAdmin->_id, Url::getReferrerUrl());
	} else {
		$objValid->add2Errors('login');
	}
	
}

// require_once('template/_header.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ecommerce website project</title>
<meta name="description" content="Ecommerce website project" />
<meta name="keywords" content="Ecommerce website project" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="/css/coreadmin.css" rel="stylesheet" type="text/css" />
		<style>
			#content{
				background-color: #ffeecc;
				width:350px;
				height:140px;
				margin: 100px auto;
				padding:10px;
				border-radius:2px;
				-webkit-box-shadow:0px 0px 30px 3px #000;
			}

		</style>
</head>
<body>

<h1>Login</h1>



<div id = "content">	
		<form method = "POST">
			<table>	
				<tr>
					<td><label>Username:</label></td>
					<td>
					<?php  echo $objValid->validate('login'); ?>
					<input type = "text" id = "username" name="login_email">
					</td>
				</tr>	
				<tr>	
					<td><label>Password:</label></td>
					<td><input type = "password" id =  "password" name="login_password"></td>
				</tr>
				<tr>
					<td colspan = "2"><br /></td>
				</tr>
				<tr>
					<td colspan = "2"><button type = "submit" style = "width:100%;" id = "login">Login</button></td>
				</tr>
				<tr>
					<td colspan = "2"><div id = "result"></div></td>
				</tr>
			</table>
		</form>
	</div>





<script src = "/js/jquery-3.1.1.js"></script>
<script src = "/js/loginadmin.js"></script>

<?php require_once('template/_footer.php'); ?>


