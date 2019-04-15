<?php
session_start();
?>

<html>
<head>
<title>edit</title>
</head>
<body>
<form method="post">
  Add photo:<input name="p" type="file" accept=".jpg">
  <button type="submit" name="submit">upload</button>
</form>

<?php

 $con=mysqli_connect("localhost","root","root","lifeline");
    if(isset($_POST['submit']))
    { 
     $p=$_POST["p"];
	$_SESSION["p"]=$p;
          		  echo "<script> window.open('st.php','_self')</script>";
}
?>
</body>
</html>