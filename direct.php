
// define variables and set to empty values
 $nameErr = $emailErr = $genderErr = $websiteErr = $passerr = "";
$name = $email = $gender = $comment = $website = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    <script language='javascript'>
		alert("name is equired");
		</script>
	//$nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        <script language='javascript'>
		alert("only letters and white space");
		</script>
	 // $nameErr = "Only letters and white space allowed";
  }
  }

  if (empty($_POST["email"])) {
    <script language='javascript'>
		alert("email req");
		</script>
	//$emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      <script language='javascript'>
		alert("invalid email format");
		</script>
	  //$emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      <script language='javascript'>
		alert("invallid url");
		</script>
	  //$websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    <script language='javascript'>
		alert("gender is req");
		</script>
	//$genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(empty($_POST["password"]))
  {
	  $passerr="password required";
  }
  else{
	    $l=strlen($_POST["password"]);
		if($l<5)
		<script language='javascript'>
		alert("more than 4");
		</script>	
		//$passerr="should be more than 5 letters";
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
