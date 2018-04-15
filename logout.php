<?php
session_start();
 $Email = $_SESSION['email'];
 $dbhost = 'mysql.hostinger.in';
 $dbuser = 'u274103504_harsh';
 $dbpass = 'Infinity@9833';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
 if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
 $db_select = mysqli_select_db($conn,'u274103504_stock');
 if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
 }

$sql1 = "UPDATE user SET status = 'offline' WHERE email='$Email'";
	mysqli_query($conn,$sql1)or die(mysqli_error($conn));

session_unset();
session_destroy();
header('location: index.html');
exit();
?>