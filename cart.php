<?php include("config.php") ?>
<?php

if(isset($_GET['x1']))
{
	$book_name=$_GET['x1'];
	
	unset($_SESSION[$book_name]);
	
	header('location:cart.php');
	
	exit;
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
    <?php include("menu.php"); ?>
    </div>
    <div id="nextHeader">
    	<img src="book_images/h1.jpg"  width="1000" class="h"/>    
   </div>
   
   <div id="main">
   	<h2>Hello Friends, It's Your Cart, Add Multiple Book and Buy Easy</h2>
    <div style="width:900px; margin:0 auto;">
    <?php
	if(isset($_POST['ok']))
	{
		$book_name=$_POST['book_name'];
		$qty=$_POST['qty'];
		$_SESSION[$book_name]=$qty;
	}
	?>
    <?php
	if(isset($_SESSION))
	{
	?>
    <div style="background-color:#000033"><a href="index.php">Continue Shopping</a></div>
    <table class="cartTab">
    	<tr>
        	<th>No.</th>
            <th>BookImage</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Discount</th>
            <th>Total</th>
            <th>Delete</th>
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
               // echo "xxx".$org_price." ".$v;
				$tot=$org_price * $v;
                //echo $tot;
				$sum=$sum+$tot;
		?>
        <tr>
        	<td><?php echo $no; ?></td>
            <td><img src="<?php echo $row['book_image']; ?>" width="60" height="60" /></td>
            <td>RS : <?php echo $row['book_price']; ?></td>
            <td><?php echo $v; ?></td>
            <td><?php echo $row['discount']; ?> %</td>
            <td>RS : <?php echo $tot; ?></td>
            <td><a href="cart.php?x1=<?php echo $k; ?>">[x]</a></td>
        </tr>
        <?php
		$no++;
		}
		?>
        <tr>
        	<td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2" align="right" bgcolor="#990000"> Grand Total : RS : <?php echo $sum; ?> /-</td>
            
        </tr>
    </table>
    <div style="background-color:#006600; text-align:right;"><a href="pay.php">PLACE ORDER</a></div>
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
