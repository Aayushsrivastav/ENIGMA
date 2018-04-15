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

if(isset($_POST['submit'])){
	$Email = $_POST['Email'];
	
$sql = "SELECT * FROM user WHERE email='$Email'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
 $count = mysqli_num_rows($result);
	
	if($count==0){
	     echo "<script>alert('Username does not exist!');</script>";
		echo "<script type='text/javascript'>window.top.location='forpass.php';</script>";
	}
	else{
		echo "<script>alert('Password reset link has been sent to your mail!');</script>";
	echo "<script type='text/javascript'>window.top.location='index.html';</script>";
	}
	
}
	?>
