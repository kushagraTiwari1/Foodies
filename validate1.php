<html>
<head>

</head>
<body>
<?php
// define variables and set to empty values
/*function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
$nameErr = $emailErr = $passErr = "";
$name = $email ="";
$f=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   /*if (empty($_POST["name"])) {
     $f=1;
	 $nameErr = "Name is required";
   } else {
     //$name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $f=1;
	   
	   $nameErr = "Only letters and white space allowed"; 
     }
   }*/
   
 /*  if (empty($_POST["email"])) {
     $f=1;
	 $emailErr = "Email is required";
   } else {
     //$email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $f=1;
	   $emailErr = "Invalid email format"; 
     }
   }*/
     
  /* if (empty($_POST["password"])) {
     $f=1;
	 $passErr = "Password required";
   } else {
     $uppercase = preg_match('@[A-Z]@', $_POST["password"]);
$lowercase = preg_match('@[a-z]@', $_POST["password"]);
$number    = preg_match('@[0-9]@', $_POST["password"]);

if(!$uppercase || !$lowercase || !$number || strlen( $_POST["password"]) < 8) {
	$f=1;
	/*echo"wohooo";
	
	$passErr ="invalid password";
  
}
}*/

}
if($f==0)
{

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

//echo "gfhgfg";

/*$na=$_POST["name"];
$em=$_POST["email"];
$ph=$_POST['phone'];
$pa=$_POST['password'];*/

$ins= "INSERT into User (Name,Email,Password,Phone) values('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phone]')";
$res=mysqli_query($conn, $ins);

mysqli_close($conn);
header("Location:b1.html");
}
?>
</body>
</html>

