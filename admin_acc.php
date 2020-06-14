<?php
ob_start();
session_start();
if(empty($_SESSION['admin_session']))
{
	header('location:admin_login.php');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Account</title>
<link href="ari_style1.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
	<div id="header">
    	<div style="padding-top:10px;"><label class="lb1">My Book Shop - Unlimited Book Store</label></div>
    </div>
    <br />
    <div align="center"><h2>Admin Menu Box</h2></div>
    <div id="admin_menu">
    <table class="tab2">
    	<tr>
        	<td><img src="png/templatemo_next.png" /></td>
            <td><a href="new_book_store.php">Add New Book</a></td>
        </tr>
        <tr>
        	<td><img src="png/templatemo_next.png" /></td>
            <td><a href="view_pay.php">View All Buying Books</a></td>
        </tr>
        <tr>
        	<td><img src="png/templatemo_next.png" /></td>
            <td><a href="book_setting.php">Book Settings</a></td>
        </tr>
        <tr>
        	<td><img src="png/templatemo_next.png" /></td>
            <td><a href="logout.php">Admin Logout</a></td>
        </tr>
    </table>
    </div>
</body>
</html>
