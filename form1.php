
<!DOCTYPE html>
<html>
 <head>
  <style>
   .error {color: #FF0000;}
  </style>
 </head>
 <body> 
<h2>PHP form validation</h2>
<p><span class="error">* required field.</span></p>
<form  name="a" id="contact-form"  method="post" onSubmit="validate()">
    <link href="styles/style1.css" rel="stylesheet" type="text/css">
    
    <fieldset>
        <legend>Login Details</legend>
    <p>First Name: <input type="text" name="name1"></p>
	<!--<span class="error">* <?php echo $nameErr;?></span>
   <br><br>-->
    <p>Last Name: <input type="text" name="name"></p>
	<!--<span class="error">* <?php echo $nameErr;?></span>
   <br><br>-->
    <p>Email:<input type="text" name="email"></p>
	<!--<span class="error">* <?php echo $emailErr;?></span>
   <br><br>-->
    <p>Adress:<input type="text" name="adress"></p>
    <p>Website:<input type="text" name="website"></p>
	<!--<span class="error"><?php echo $websiteErr;?></span>
   <br><br>-->
	<p>Comment: <textarea name="comment" rows="5" cols="40"></textarea></p>
	<p>State:
    <select>
        <option>Uttar Pradesh</option>
        <option>tamilnadu</option>
        </select>
    </p>
    <p>Password:<input type="password" name="password"> </p>
	<!--<span class="error">* <?php echo $passerr;?></span>
   <br><br>-->
	
    <p>Gender:
    <input type="radio" name="areyou" value="male"> Male or
    <input type="radio" name="areyou" value="female"> Female</p>
	<!--<span class="error">* <?php echo $genderErr;?></span>
   <br><br>-->
    </fieldset>
    <fieldset>
        <legend>Choices</legend>
    <p> Do you like coffee <input type="checkbox" name="checkbox"> Yes</p>
      <!--<li><label for="photo">Bio photo:</label> <input type="file" name="photo" id="photo" value="" /></li>--> 
      </fieldset>
        <p><input type="submit" value="Send Survey">  
            <input type="reset" value="Reset form"></p>
    <!--<a href="javascript:void(document.form.submit())">click here to submit</a> 
    <script src="scripts/main1.js"></script> -->
	</form>
   <script>
    validate()
	{
		valfirst(document.a.name1.value);
	}
	function valfirst(field)
	{
		if(field=="")
			alert("name cannot be empty");
		else if(field.length>8)
			alert("too big");
		else if(/^[A-Z][a-zA-Z_]/.test(field))
			alert("shouls start with capital no special characters");
		 
	}
   </body>
</html>