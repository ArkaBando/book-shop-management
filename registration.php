<?php include("config.php") ?>
<?php

if(isset($_POST['ok']))
{
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$name=$_POST['name'];
	$add=$_POST['add'];
	$phno=$_POST['phno'];
	
	$sql="insert into `user`(`name`,`email`,`pwd`,`phno`,`add`) values('$name','$email','$pwd','$phno','$add')";
	
	$res=mysqli_query($conn,$sql);
	
	if($res==1)
	{
		header('location:pay.php');
		exit;
	}
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link href="ari_style1.css" type="text/css" rel="stylesheet" media="all" />
<style type="text/css">

.xl:active,.xl:link,.xl:visited{
	color:#900;
	letter-spacing:3px;
}

</style>
</head>

<body>
	<div id="header">
    	<div style="padding-top:10px;"><label class="lb1">My Book Shop - Unlimited Book Store</label></div>
    </div>
    <div id="menu">
    <?php include("menu.php"); ?>
    </div>
    <div id="nextHeader">
    	<img src="book_images/h2.jpg"  width="1000" class="h"/>    
   </div>
   
   <div id="main">
   	<h2>Payment Mode - Home Delivery, Thank You</h2>
    <div style="width:900px; margin:0 auto;">
   	 <form name="frm" action="" method="post">
     	<table class="tabx">
        	 <tr>
            	<td>Name :</td>
                <td><input type="text" name="name" class="txt" required="required"  /></td>
            </tr>
             <tr>
            	<td>Phone No :</td>
                <td><input type="number" name="phno" class="txt" required="required" /></td>
            </tr>
            <tr>
            	<td>Email-ID :</td>
                <td><input type="email" name="email" class="txt" required="required" /></td>
            </tr>
           <tr>
            	<td>Password :</td>
                <td><input type="password" name="pwd" class="txt" required="required" /></td>
            </tr>
             <tr>
            	<td>Address :</td>
                <td><input type="text" name="add" class="txt" required="required" /></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" name="ok" value="Login" class="bt10" /></td>
            </tr>
        </table>
        <a class="xl" href="pay.php">Login</a>
     </form>
    </div>
   </div>
   
</body>
</html>
