<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.restra1 {
    
    /*position:absolute;
    left:50px;*/
    width: 300px;
    height: 100px;
    background-color:yellow;
    /*border: 1px solid blue;*/
    box-sizing: border-box;
}
</style>
</head>
<body>
<<?php 
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
$c=$_POST['cityId'];
$restra= "SELECT Name from Restaurants where CityID=$c";
$res=mysqli_query($conn, $restra);
$rows=mysqli_num_rows($res);
//echo $rows;
/*for($j=0;$j<$rows;$j++)
{
	<div class="restra
}*/
mysqli_close($conn);
//header("Location:b1.html");
?>
<div class="row">
 <div class="col-sm-4">
   <div class="cuisines">
                    <div class="filter__title">Cuisines</div>
                    <ul class="filter__list">
                                    <li class="filter__list__item" data-quantity="63">
            <a href="/restaurants/cuisines/north-indian">
                <input type="checkbox" id="cuisines_0" name="cuisines[]" value="175" />
                <label for="cuisines_0">North Indian</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="58">
            <a href="/restaurants/cuisines/chinese">
                <input type="checkbox" id="cuisines_1" name="cuisines[]" value="81" />
                <label for="cuisines_1">Chinese</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="19">
            <a href="/restaurants/cuisines/biryani-cuisine">
                <input type="checkbox" id="cuisines_2" name="cuisines[]" value="200" />
                <label for="cuisines_2">Biryani</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="16">
            <a href="/restaurants/cuisines/fast-food-cuisine">
                <input type="checkbox" id="cuisines_3" name="cuisines[]" value="93" />
                <label for="cuisines_3">Fast Food</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="13">
            <a href="/restaurants/cuisines/italian-cuisine">
                <input type="checkbox" id="cuisines_4" name="cuisines[]" value="76" />
                <label for="cuisines_4">Italian</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="11">
            <a href="/restaurants/cuisines/punjabi-cuisine">
                <input type="checkbox" id="cuisines_5" name="cuisines[]" value="145" />
                <label for="cuisines_5">Punjabi</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="10">
            <a href="/restaurants/cuisines/mughlai">
                <input type="checkbox" id="cuisines_6" name="cuisines[]" value="176" />
                <label for="cuisines_6">Mughlai</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="10">
            <a href="/restaurants/cuisines/wraps">
                <input type="checkbox" id="cuisines_7" name="cuisines[]" value="128" />
                <label for="cuisines_7">Wraps</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="8">
            <a href="/restaurants/cuisines/kebab">
                <input type="checkbox" id="cuisines_8" name="cuisines[]" value="139" />
                <label for="cuisines_8">Kebab</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="8">
            <a href="/restaurants/cuisines/sea-food">
                <input type="checkbox" id="cuisines_9" name="cuisines[]" value="89" />
                <label for="cuisines_9">Seafood</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="7">
            <a href="/restaurants/cuisines/pizza">
                <input type="checkbox" id="cuisines_10" name="cuisines[]" value="80" />
                <label for="cuisines_10">Pizza</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="5">
            <a href="/restaurants/cuisines/continental-cuisine">
                <input type="checkbox" id="cuisines_11" name="cuisines[]" value="158" />
                <label for="cuisines_11">Continental</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="4">
            <a href="/restaurants/cuisines/cakes-bakery">
                <input type="checkbox" id="cuisines_12" name="cuisines[]" value="84" />
                <label for="cuisines_12">Cakes-Bakery</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="4">
            <a href="/restaurants/cuisines/desserts">
                <input type="checkbox" id="cuisines_13" name="cuisines[]" value="91" />
                <label for="cuisines_13">Desserts</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="3">
            <a href="/restaurants/cuisines/salads">
                <input type="checkbox" id="cuisines_14" name="cuisines[]" value="85" />
                <label for="cuisines_14">Salads &amp; Sandwiches</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="3">
            <a href="/restaurants/cuisines/thai-cuisine">
                <input type="checkbox" id="cuisines_15" name="cuisines[]" value="83" />
                <label for="cuisines_15">Thai</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="2">
            <a href="/restaurants/cuisines/bengali">
                <input type="checkbox" id="cuisines_16" name="cuisines[]" value="201" />
                <label for="cuisines_16">Bengali</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="2">
            <a href="/restaurants/cuisines/snacks">
                <input type="checkbox" id="cuisines_17" name="cuisines[]" value="129" />
                <label for="cuisines_17">Snacks</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="2">
            <a href="/restaurants/cuisines/south-east-asian">
                <input type="checkbox" id="cuisines_18" name="cuisines[]" value="82" />
                <label for="cuisines_18">Pan-Asian</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="2">
            <a href="/restaurants/cuisines/south-indian">
                <input type="checkbox" id="cuisines_19" name="cuisines[]" value="166" />
                <label for="cuisines_19">South Indian</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/burgers">
                <input type="checkbox" id="cuisines_20" name="cuisines[]" value="92" />
                <label for="cuisines_20">Burgers</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/hyderabadi">
                <input type="checkbox" id="cuisines_21" name="cuisines[]" value="185" />
                <label for="cuisines_21">Hyderabadi</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/ice-creams-cuisine">
                <input type="checkbox" id="cuisines_22" name="cuisines[]" value="117" />
                <label for="cuisines_22">Ice creams</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/japanese">
                <input type="checkbox" id="cuisines_23" name="cuisines[]" value="79" />
                <label for="cuisines_23">Japanese</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/lebanese">
                <input type="checkbox" id="cuisines_24" name="cuisines[]" value="98" />
                <label for="cuisines_24">Lebanese</label>
            </a>
        </li>
            <li class="filter__list__item" data-quantity="1">
            <a href="/restaurants/cuisines/sandwiches-cuisine">
                <input type="checkbox" id="cuisines_25" name="cuisines[]" value="78" />
                <label for="cuisines_25">Sandwiches</label>
            </a>
        </li>
                        </ul>
                    <div class="filter__expander">
                        Show more
                    </div>
                </div>
            </div>
		
<div class="col-sm-8">
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
<div class="check">
<button type="submit>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
<div class="restra1">
<?php $row=mysqli_fetch_row($res);?>
<?php echo $row[0]; ?>
</div>
</div>
</div>
</div>
</body>
</html>