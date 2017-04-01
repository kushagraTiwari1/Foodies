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

//echo "gfhgfg";
$c=$_POST['cityId'];
/*$sql = "SELECT CityID from cities where City=$c";
echo $c;
$city = mysqli_query($conn, $sql);
$c1=mysqli_fetch_row($city);*/
$res= "SELECT Name from Restaurant where CID=$c";
$res1=mysqli_query($conn, $res);
$rows=mysqli_num_rows($res1);
//echo "Name",$rows;
for($j=0;$j<$rows;$j++)
{
	$row=mysqli_fetch_row($res1);
	echo 'Name  ' . $row[0] . '<br>';
	//echo 'Id  ' . $row[1] . '<br>';
}
mysqli_close($conn);




?>
