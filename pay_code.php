<?php include("config.php") ?>
<?php
	if(isset($_GET['uid']))
	{
		$x="select * from `user` where `uid`='".$_GET['uid']."'";
		$r=mysqli_query($conn,$x);
		$rr=mysqli_fetch_array($r);
		$name=$rr['name'];
		$email=$rr['email'];
		$phno=$rr['phno'];
		$add=$rr['add'];
		$dt=date('d/m/y');
		foreach($_SESSION as $k=>$v)
		{
			$s="select * from `book_master` where `book_name`='$k'";
			$r=mysqli_query($conn,$s);
			$rr=mysqli_fetch_array($r);
			$price=$rr['book_price'];
			
			mysqli_query($conn,"insert into `pay`(`name`,`email`,`phno`,`add`,`book_name`,`price`,`dt`,`qty`) values('$name','$email','$phno','$add','$k','$price','$dt','$v')");
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
    <div id="menu">
    <table class="tabmenu" width="100%" cellpadding="3" cellspacing="3">
    	<tr>
        	<td>HOME</td>
            <td>Book Search</td>
            <td>MyCart</td>
            <td>About Us</td>
            <td>Contact Us</td>
        </tr>
    </table>
    </div>
    <div id="nextHeader">
    	<img src="book_images/h1.jpg"  width="1000" class="h"/>    
   </div>
   
   <div id="main">
   	<h2>Hello Friends, It's Your Cart, Add Multiple Book and Buy Easy</h2>
    <div style="width:900px; margin:0 auto;">
    <?php
	if(isset($_SESSION))
	{
	?>
    <div align="right">
    <h3>Thank You for buying books from our website & Payment @ Home Delivery</h3>
    </div>
    <table class="cartTab">
    <tr class="u">
    	<td>Name :</td>
        <td> <?php if(isset($name)) echo $name; ?></td>
        <td>Email :</td>
         <td><?php if(isset($email)) echo $email; ?></td>
         <td>PH :</td>
         <td><?php if(isset($phno)) echo $phno; ?></td>
    </tr>
    	<tr>
        	<th>No.</th>
            <th>BookImage</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Discount</th>
            <th>Total</th>
        </tr>
        <?php
		$no=1;
		$sum=0;
			foreach($_SESSION as $k=>$v)
			{
				$sx="select * from `book_master` where `book_name`='$k'";
				$res=mysqli_query($conn,$sx);
				$row=mysqli_fetch_array($res);
				$org_price=$row['book_price']-(($row['book_price']*$row['discount'])/100);
				$tot=$org_price*$v;
				$sum=$sum+$tot;
		?>
        <tr>
        	<td><?php echo $no; ?></td>
            <td><img src="<?php echo $row['book_image']; ?>" width="60" height="60" /></td>
            <td>RS : <?php echo $row['book_price']; ?></td>
            <td><?php echo $v; ?></td>
            <td><?php echo $row['discount']; ?> %</td>
            <td>RS : <?php echo $tot; ?></td>
        </tr>
        <?php
		$no++;
		}
		?>
        <tr>
        	<td></td>
            <td><a href="empty.php">HOME</a></td>
            <td></td>
            <td></td>
            <td colspan="2" align="right" bgcolor="#990000"> Grand Total : RS : <?php echo $sum; ?> /-</td>
            
        </tr>
    </table>
    <div style="text-align:right;"><input type="button" value="PRINT BILL" class="bt10" onclick="window.print();" />
    </div>
    <?php
	}
	else
	{
		header('location:index.php');
		exit;
	}
	?>

    </div>
   </div>
   
</body>
</html>
