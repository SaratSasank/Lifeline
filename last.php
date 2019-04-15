<?php
session_start();
if(isset($_POST['pro']))
{
  session_destroy();
  header("Location:about.php");

}
?>

<html>
<head>
<style>
body {
      background:url("wood.jpg");
      background-size:cover;
      background position:centre;
      font-family:papyrus;
      text-align:center;
}
.h1{
     font-size:40px;
     color:white;
}

.h3{
     font-size:40px;
     color:white;
}

</style>
</head>
<body>

<form method="post" action="last.php">
<button type="submit" name="pro" style="float:right;border-radius: 90%;height:70px" class="button">  LOGOUT  </button>
</form>

<br><br><br>

<h1 style="color:white;margin-top:150"> <center> APPOINTMENT   SUCCESSFUL BOOKED </center> </h1><br>
<h2 style="color:white;margin-top:30px"><center> Have a happy visit:)</center></h2>


</body>
</html>