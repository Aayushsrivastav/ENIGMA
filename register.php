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
	
$name = $_POST['name'];
$email = $_POST['email'];
$regpass = md5($_POST['regpass']);
	
	$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 $count = mysqli_num_rows($result);

if(!$count==0){
     echo "<script>alert('Username already exist!');</script>";
	echo "<script type='text/javascript'>window.top.location='index.html';</script>";
}
else{
	
	
$sql = "INSERT into user(name,email,pass,status)
VALUES('".$name."','".$email."','".$regpass."','online')";
if(mysqli_query($conn, $sql)){
	$sql = "SELECT * FROM user WHERE email='$email' AND pass='$regpass'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
	$_SESSION['id'] = $row['id'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['name'] = $row['name'];
	
	
 echo "<script type='text/javascript'>window.top.location='Home.php';</script>";
}
 else{
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
}
}
 mysqli_close($conn);
?>
</body>
</html>