<?php
session_start();
$a=$_SESSION["name"];
$b=$_SESSION["email"];
$c=$_SESSION["mob"];
$x=$_SESSION["cat"];
$y=$_SESSION["hos"];
$z=$_SESSION["doc"];
$dt=$_SESSION["date"];

$p= 200;
echo $dt;

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
   background:url("b2.jpg");
   background-size:cover;
   background position:centre;

  font-family: Arial;
  font-size: 20px;
  padding: 400px;

}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #262626;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 15px;
   opacity: 1.0;

  
}
.container:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.60), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: #bfbfbf;
}

label {
  margin-bottom: 10px;
  display: block;
  color: #ffffff;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:  #4d4d4d;
  color: white;
  padding: 12px;
  display: inline-block;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  height: 50px;
 width: 120px;
   position: absolute;
  left: 610px;
  top: 940px;
  }

.btn:hover {
  background-color: #000000;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<marquee><font style="margin-top:40px">Do not press back or refresh the page when the payment is in progress!!!!!</font></marquee>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" >
        <div class="row">
          <div class="col-50">
          <div class="col-50">
<h3>      </h3>
<h3>      </h3>
<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum"s name="cardnumber" required placeholder="XXXX-XXXX-XXXX-XXXX">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" required placeholder="August">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" required placeholder="2019">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" required placeholder="XXX">
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</br></br></br>


        <button type="submit" name="submit1" class="btn">Pay 200</button>
  


    </form>


</body>


<button type="submit" name="pro" style="float:right;border-radius: 90%;height:70px" class="button"> <a href="ap.php"> back to appointments </a> </button>

<?php
  $con=mysqli_connect("localhost","root","root","lifeline");

if(isset($_POST['submit1']))
	{       	       
                 $cardnumber=$_POST['cardnumber']; 
                 $cardname=$_POST['cardname']; 
                 $expmonth=$_POST['expmonth'];
                 $expyear=$_POST['expyear'];
                 $cvv=$_POST['cvv'];
$mm=(int)$expmonth;
$ey=(int)$expyear;
$cvv=strlen($cvv);
                  		 
$cn=strlen($cardnumber);
if($cn<14)
{
echo "<script>alert('The cardnumber must have 14 characters') </script>";
}
else if($cn>14)
{
echo "<script>alert('The cardnumber must have 14 characters') </script>";
}
else
{
if($mm>12)
{
echo "<script>alert('The expiry month must be less than 12') </script>";
}
else
{
if($ey<2019)
{
echo "<script>alert('The expiry year must be greater than 2018') </script>";
}
else
{
if($cvv>3)
{
echo "<script>alert('The cvv must contain 3 digits') </script>";

}
else
{
$query="insert into pay (name,email,mob,dcat,dhos,dname,date,paid) values('$a','$b','$c','$x','$y','$z','$dt',$p)";
		 $result=mysqli_query($con,$query);
//echo $result;
		 $num=mysqli_affected_rows($con);

		 
if($num>0)
		 {    
		       echo "<script>alert('your payment is successful') </script>";
		       echo "<script>window.open('form.php','_self') </script>";    
		 }
}
}
}
}
}

?>

</html>