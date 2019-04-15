<?php
session_start();
?>

<html>

<head> 
  <title> LOGIN </title>
  <link rel="stylesheet" href="Login.css">
</head>

<body>
   <div class="signin2-box"> </br>
   <h1>Login</h1>
       <form method="post" action="login.php">
       <input type="email" name="email" required placeholder="ENTER EMAIL"></br>
       <input type="password" name="password" required placeholder="ENTER PASSWORD"></br>
       <button type="submit" name="enter">ENTER</button>
          
</body>

<?php
  $con=mysqli_connect("localhost","root","root","lifeline");

if(isset($_POST['enter']))
{       
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from user where email='$email' and password='$password' ";
	$login_status=mysqli_query($con,$query);
	if(mysqli_num_rows($login_status) == 1)
	{ 
          
         while($row=mysqli_fetch_array($login_status))
          { 
      	   echo $row['name']; 
           $n=$row['name'];
            echo $n;
           $_SESSION["name"]=$n;
	}
          header("Location:ap.php");

	}
	else
	{
		 echo "<script>alert('Enter correct details') </script>";
		 echo "<script>window.open('login.php','_self') </script>";
	}

}

?>

</html>