<?php
Login::restrictAdmin();

$action = Url::getParam('action');

switch($action) {
	
	case 'add':
	require_once('banners/add.php');
	break;
	
	case 'added':
	require_once('banners/added.php');
	break;
	
	case 'added-failed':
	require_once('banners/added-failed.php');
	break;
	
	case 'edit':
	require_once('banners/edit.php');
	break;
	
	case 'edited':
	require_once('banners/edited.php');
	break;
	
	case 'edited-failed':
	require_once('banners/edited-failed.php');
	break;
	
	case 'remove':
	require_once('banners/remove.php');
	break;
	
	default:
	require_once('banners/list.php');
}







