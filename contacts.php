<?php
session_start();
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
	
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT into contactsdetail(email,message)
VALUES('".$email."','".$message."')";

mysqli_query($conn,$sql)or die(mysqli_error($conn));

header('location: Home.php');

?>