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


	<div class="header_bottom">
		<div class="left-col"> 
		<h2> DoDo </h2>
		</div>
		

		<div class="right-col">
			<div id="header_in">
			 <?php
			if (Login::isLogged(Login::$_login_admin)) {
				echo '<div id="logged_as">Logged in as: <strong>';
				echo Login::getFullNameAdmin(Session::getSession(Login::$_login_admin));
				echo '</strong> | <a href="/admin/?page=logout">Logout</a></div>';				
			} 
		?>
	</div>
	</div>
	</div>
	<div class="sidebar clearfix">
	<?php if (Login::isLogged(Login::$_login_admin)) { ?>
			
			<div class="dev br_td">&nbsp;</div>
			<ul class="sidebar-panel nav">
			<li class="sidetitle"> MAIN </li>

				<li>
					<a href="/admin/?page=products"
					<?php echo Helper::getActive(
						array('page' => 'products')
					); ?>>
					products
					</a>
				</li>
				<li>
					<a href="/admin/?page=categories"
					<?php echo Helper::getActive(
						array('page' => 'categories')
					); ?>>
					categories
					</a>
				</li>
				<li>
					<a href="/admin/?page=orders"
					<?php echo Helper::getActive(
						array('page' => 'orders')
					); ?>>
					orders
					</a>
				</li>
				<li>
					<a href="/admin/?page=clients"
					<?php echo Helper::getActive(
						array('page' => 'clients')
					); ?>>
					Clients
					</a>
				</li>
				
				<li>
					<a href="/admin/?page=business"
					<?php echo Helper::getActive(
						array('page' => 'business')
					); ?>>
					business
					</a>
				</li>
				<li>
					<a href="/admin/?page=banners"
					<?php echo Helper::getActive(
						array('page' => 'banners')
					); ?>>
					banners
					</a>
				</li>
				<li>
					<a href="/admin/?page=advs"
					<?php echo Helper::getActive(
						array('page' => 'advs')
					); ?>>
					advertisement
					</a>
				</li>
			</ul>				
			<?php } else { ?>
				&nbsp;
			<?php } ?>
		
	</div>

	<div class="content">
	


		
		
		
		
		
		
		
		
		