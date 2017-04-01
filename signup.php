
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style type="text/css">
    .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  position:relative;
  left:550px;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


</style>
   


<form class="form-horizontal" method="POST" action="validate1.php" >
<fieldset>

<!-- Form Name -->
<legend>Sign Up</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name:</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
 
 <!-- <span class="help-block">help</span> -->  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email:</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md">
 
  <!-- <span class="help-block">help</span> -->  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone:</label>  
  <div class="col-md-4">
  <input id="textinput" name="phone" type="text" placeholder="Phone" class="form-control input-md">
  
  <!-- <span class="help-block">help</span> -->  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Enter Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password" type="password" placeholder="New Password" class="form-control input-md">
	
   <!-- <span class="help-block">help</span> -->
  </div>
</div>

    

</fieldset>
<button type="submit"  class="button" ><span>Submit</span></button>
</form>


</body>
</html>

