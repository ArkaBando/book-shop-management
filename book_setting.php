<?php include("config.php"); ?>
<?php

if(empty($_SESSION['admin_session']))
{
	header('location:admin.php');
	exit;
}


?>
<?php
if(isset($_GET['did']))
{
	mysqli_query($conn,"delete from `book_master` where `book_id`='".$_GET['did']."'");
	header('location:book_setting.php');
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
	$src="select * from `book_master` order by `book_id` desc";
	$res=mysqli_query($conn,$src);
	if(mysqli_num_rows($res))
	{
	?>
    <div id="entry">
    	<table class="tab4">
        	<tr>
            	<th>No</th>
                <th>Cover Image</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Book Price</th>
                <th>Book Stock</th>
                <th>Remove</th>
            </tr>
            <?php
			$sl=1;
			while($row=mysqli_fetch_array($res))
			{
			?>
            <tr>
            	<td><img src="png/templatemo_next.png" width="16" height="16" /><?php echo $sl; ?></td>
                <td><img src="<?php echo $row['book_image']; ?>" width="60" height="50" border="1" /></td>
                <td><?php echo $row['book_name']; ?></td>
                <td><?php echo $row['book_writer']; ?></td>
                <td><?php echo $row['book_price']; ?></td>
                <td><?php echo $row['book_stock']; ?></td>
                <td><a href="book_setting.php?did=<?php echo $row['book_id']; ?>">
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
