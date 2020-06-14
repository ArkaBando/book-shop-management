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
   <?php
   
   $sx="select * from `book_master` order by `book_id` desc";
   $rx=mysqli_query($conn,$sx)or die(mysqli_error($conn));
   if(mysqli_num_rows($rx))
   {
   
   ?>
   <div id="main">
   	<h2>Our Current Book Stock - Just Take a Look, Thank You</h2>
    <div style="width:900px; margin:0 auto;">
    <table class="mainTab">
    	<?php
			while($row=mysqli_fetch_array($rx))
			{
		?>
        <tr>
        	<td><img src="<?php echo $row['book_image']; ?>" width="100" height="100" class="im" /></td>
            <td><?php echo $row['book_name']; ?></td>
            <td><?php echo $row['book_writer']; ?></td>
            <td>Price - RS : <?php echo $row['book_price']; ?></td>
            <td align="center" >
            <div style="width:auto; height:auto; padding:5px; background-color:#FF0000;"><a href="view_book.php?bid=<?php echo $row['book_id']; ?>">View Details</a></div></td>
        </tr>
        <?php
		}
		?>
    </table>
    </div>
   </div>
   <?php
   }
   ?>
</body>
</html>
