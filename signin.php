<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
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
	$Email = $_POST['Email'];
$pass = md5($_POST['pass']);
	
$sql = "SELECT * FROM user WHERE email='$Email' AND pass='$pass'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
 $count = mysqli_num_rows($result);

if($count==0){
	
	
	
     echo "<script>alert('Your username or password is incorrect!');</script>";
	echo "<script type='text/javascript'>window.top.location='index.html';</script>";
}
else{
	if($row['role']=='admin'){
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['name'] = $row['name'];
		$sql1 = "UPDATE user SET status = 'online' WHERE email='$Email'";
		mysqli_query($conn,$sql1)or die(mysqli_error($conn));

		 header('location: adminhome.php');
	}
	else if($row['role']=='user'){
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['name'] = $row['name'];
		$sql1 = "UPDATE user SET status = 'online' WHERE email='$Email'";
		mysqli_query($conn,$sql1)or die(mysqli_error($conn));

		 header('location: Home.php');
	}
}

 mysqli_close($conn);
?>
</body>
</html>