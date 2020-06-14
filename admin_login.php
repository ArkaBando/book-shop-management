<?php
ob_start();
session_start();

if(!empty($_SESSION['admin_session']))
{
	header('location:admin_acc.php');
	exit;
}

if(isset($_POST['ok']))
{
	$ad_name=$_POST['ad_name'];
	$ad_logid=$_POST['ad_logid'];
	
	if($ad_name=="Admin" && $ad_logid=="admin_1234")
	{
		$_SESSION['admin_session']="Active";
		header('location:admin_acc.php');
		exit;
	}
	else
	{
		$err="Login Information Incorrect";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link href="ari_style1.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
	<div id="header">
    	<div style="padding-top:10px;"><label class="lb1">My Book Shop - Unlimited Book Store</label></div>
    </div>
    <br /><br /><br />
    <div id="logBox">
    		<div align="center"><label class="lb2">Admin Login Box</label></div>
            <form name="frm" action="admin_acc.php" method="post">
            <table class="tab1">
            	<tr>
                	<td>Login ID :</td>
                    <td><input type="text" name="ad_name" class="txt" /></td>
                </tr>
                <tr>
                	<td>Password :</td>
                    <td><input type="password" name="ad_logid" class="txt" /></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" name="ok" value="Login" class="bt" /></td>
                </tr>
            </table>
            </form>
    </div>
    <br />
    <div align="center">
    <?php
	if(isset($err))
	{
	?>
    <label class="err"><?php echo $err; ?></label>
    <?php
	}
	?>
    </div>
    <div align="center">
    
    	<a href="index.php">[BACK]</a>
    </div>
</body>
</html>
