<?php include("config.php"); ?>
<?php

if(empty($_SESSION['admin_session']))
{
	header('location:admin.php');
	exit;
}


?>
<?php
if(isset($_GET['uid']))
{
	mysqli_query($conn,"delete from `pay` where `uid`='".$_GET['uid']."'");
	header('location:view_pay.php');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Settings</title>
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
        <li><a href="new_book_store.php">Add New Book</a></li>
        <li><a href="logout.php">Admin Logout</a></li>
    </ul>
    </div>
    <div align="center"><h2>Advance Book Settings</h2></div>
    <br />
    <?php
	$src="select * from `pay` order by `uid` desc";
	$res=mysqli_query($conn,$src);
	if(mysqli_num_rows($res))
	{
	?>
    <div id="entry">
    	<table class="tab5">
        	<tr>
            	<th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Book Name</th>
                <th>Book Price</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
            <?php
			$sl=1;
			while($row=mysql_fetch_array($res))
			{
			?>
            <tr>
            	<td><?php echo $sl; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phno']; ?></td>
                <td><?php echo $row['add']; ?></td>
                <td><?php echo $row['book_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['dt']; ?></td>
                <td><a href="view_pay.php?uid=<?php echo $row['uid']; ?>">
                <img src="png/close-delete-icon.png" width="24" height="24" /></a></td>
            </tr>
            <?php
			$sl++;
			}
			?>
        </table>
    </div>
    <?php
	}
	else 
	{
		echo "<div align='center'><h2>Book Stock Empty - No Book</h2></div>";
	}
	?>
</body>
</html>
