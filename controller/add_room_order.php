<?php
	require_once('/admin/include/config.php');
	require_once('/admin/include/admin_db.php');
	require_once('/admin//include/get_list.php');
	require_once('/admin/link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_SESSION['date_check_in'])==NULL) {
		header ("Location: $plink");
	}
	require_once('../include/menu.php');
	$cities=get_city();
	require_once('detail.php');
?>