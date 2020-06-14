<?php include("config.php") ?>

<body>
	<div id="header">
    	<div style="padding-top:10px;"><label class="lb1">My Book Shop - Unlimited Book Store</label></div>
    </div>
    <div id="menu">
    <?php include("menu.php"); ?>
    </div>
    <div id="nextHeader">
    	<img src="book_images/h3.jpg"  width="1000" class="h"/>    
   </div>
   
   <div id="main">
   	<h2>Search Your Book & Buy - Just Take a Look, Thank You</h2>
    <div style="width:900px; margin:0 auto;">
    <form name="frmx" action="" method="post">
    	<label class="lb12">Select Type of Book :</label>
        <?php
		$s="select distinct(`book_type`) from `book_master`";
		$r=mysqli_query($conn,$s);
		if(mysqli_num_rows($r))
		{
		?> 
        <select name="book_type" class="sx">
        	<option selected="selected">SELECT BOOK</option>
            <?php
			while($row=mysqli_fetch_array($r))
			{
			?>
            <option value="<?php echo $row['book_type']; ?>"><?php echo $row['book_type'];
			 ?></option>
            <?php
			}
			?>
        </select>
        <input type="submit" name="src" value="FIND ALL BOOK" class="bt10" />
        <?php
		}
		?>
    </form>
    <?php
   if(isset($_POST['src']))
   {
   	$book_type=$_POST['book_type'];
   $sx="select * from `book_master` where `book_type`='$book_type'";
   $rx=mysqli_query($conn,$sx)or die(mysqli_error($conn));
   if(mysqli_num_rows($rx))
   {
   
   ?>
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
    
   <?php
   }
   }
   ?>
    </div>
   </div>
   
</body>
</html>
