<?php

include("config.php");

?>


<?php

if(isset($_POST['ok']))
{
	$book_name=$_POST['book_name'];
	$book_writer=$_POST['book_writer'];
	$book_type=$_POST['book_type'];
	$book_price=$_POST['book_price'];
	$book_stock=$_POST['book_stock'];
	$discount=$_POST['discount'];
	$book_img=$_FILES['book_img']['name'];
	$ex=end(explode('.',$book_img));
	
	if($ex=="jpg" || $ex=="jpeg" || $ex=="png" || $ex=="gif")
	{
		$book_image="book_images/".rand(123,999).$book_name."_".$book_img;
		$ins="insert into `book_master`(`book_name`,`book_writer`,`book_type`,`book_stock`,`book_price`,`discount`,`book_image`) values('$book_name','$book_writer','$book_type','$book_stock','$book_price','$discount','$book_image')";
		
		$res=mysqli_query($conn,$ins);
		
		if($res==1)
		{
			move_uploaded_file($_FILES['book_img']['tmp_name'],$book_image);
			
			header('location:new_book_store.php?ok');
			exit;
		}
	}
	else
	{
		header('location:new_book_store.php?ferr');
		exit;
	}
}


?>