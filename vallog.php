<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	echo "fuck";
    die("Connection failed: " . mysqli_connect_error());
}


$res= "SELECT Name from User where Email=$_POST[email] and Password=$_POST[password]";
$res1=mysqli_query($conn, $res);
if(!empty($res1))
{
	header("Location:b1.html");
}
else
	echo"<script>alert('wrong credentials')</alert>";


mysqli_close($conn);
?>
</body>
</html>
