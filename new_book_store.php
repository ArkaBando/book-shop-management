<?php
ob_start();
session_start();
if(empty($_SESSION['admin_session']))
{
	header('location:admin.php');
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Add new book</title>
<link href="ari_style1.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
	<div id="header">
    	<div style="padding-top:10px;"><label class="lb1">My Book Shop - Unlimited Book Store</label></div>
    </div>
    <br />
    <div align="center">
    <ul>
    	<li><a href="admin_acc.php">Admin Home</a></li>
        <li><a href="view_pay.php">View All Buying Books</a></li>
        <li><a href="book_setting.php">Book Settings</a></li>
        <li><a href="logout.php">Admin Logout</a></li>
    </ul>
    </div>
    <div align="center"><h2>Add New Book</h2></div>
    <br />
    <div id="entry">
    <form name="frm" action="book_store_code.php" method="post" enctype="multipart/form-data">
    	<table class="tab3">
        	<tr>
            	<td>Book Name :</td>
                <td><input type="text" name="book_name" class="txt1" required="required" /></td>
                <td>Author Name :</td>
                <td><input type="text" name="book_writer" class="txt1" required="required" /></td>
            </tr>
            <tr>
            	<td>Book Type :</td>
                <td><input type="text" name="book_type" class="txt1" required="required" /></td>
                <td>Book Stock :</td>
                <td><input type="text" name="book_stock" class="txt1" required="required" /></td>
            </tr>
            <tr>
            	<td>Book Price :</td>
                <td><input type="text" name="book_price" class="txt1" required="required" /></td>
                <td>Discount :</td>
                <td><input type="text" name="discount" class="txt1" required="required" /></td>
            </tr>
            <tr>
            	<td>Book Image :</td>
                <td><input type="file" name="book_img" class="txt1" /></td>
                <td>&nbsp</td>
                <td><input type="submit" name="ok" value="SAVE BOOK" class="bt1" /></td>
            </tr>
        </table>
    </form>
    </div>
    <br />
    <div align="center">
    <?php
	if(isset($_GET['ok']))
	{
	?>
    <label class="err">New Book Successfully Inserted Into Our Stock</label>
    <?php
	}
	?>
    <?php
	if(isset($_GET['ferr']))
	{
	?>
    <label class="err">Book Image Format Incorrect</label>
    <?php
	}
	?>
    </div>
</body>
</html>
