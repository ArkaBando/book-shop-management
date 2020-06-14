 <?php include("config.php") ?>
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
    	<img src="book_images/h2.jpg"  width="1000" class="h"/>    
   </div>
   
   <div id="main">
   	<h2>Our Current Book Stock - Just Take a Look, Thank You</h2>
    <div style="width:900px; margin:0 auto;">
    	<?php
		if(isset($_GET['bid']))
		{
			$s="select * from `book_master` where `book_id`='".$_GET['bid']."'";
			$r=mysqli_query($conn,$s);
			$row=mysqli_fetch_array($r);
		?>
        <form name="frm" action="cart.php" method="post">
        <table class="tabbook">
        <tr>
        	<td><img src="<?php echo $row['book_image']; ?>" width="150" height="150" border="2"></td>
            <td>Book Name : <?php echo $row['book_name']; ?></td>
        </tr>
        <tr>
        	<td>Author Name : <?php echo $row['book_writer']; ?></td>
            <td>Book Type : <?php echo $row['book_type']; ?></td>
        </tr>
        <tr>
        	<td>Price : <?php echo $row['book_price']; ?> /-</td>
            <td>Discount : <?php echo $row['discount']; ?> %</td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="text" name="qty" size="2" style="border:1px solid #333333;">
            <input type="submit" name="ok" value="Add to Cart" class="c">
            <input type="hidden" name="book_name" value="<?php echo $row['book_name']; ?>">
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="right" bgcolor="#000066"><a href="index.php">BACK | HOME</a></td>
        </tr>
        </table>
        </form>
        <?php
		}
		?>
    </div>
   </div>
   </body>
</html>
