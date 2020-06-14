<?php

ob_start();

session_start();

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,"book_shop");

?>