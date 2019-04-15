

<html>
<head>
<title> Home </title>
<style>

.a{
  font-size: 20px;
  background-color:;
  border: red;
  spacing: 20px;
  cursor: pointer;
}

.a:active {
  transform: translateY(4px);
}

.b {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.ss{
       width:730px;
       height:530px;
       background:rgba(255,255,255,0);//transparency of box
       color: white;
       top:55%;
       left:75%;
       position:absolute;
       transform:translate(-50%,-50%);

.myDIV {
  -webkit-animation: mymove 5s infinite;
  animation: mymove 5s infinite;
}

@-webkit-keyframes mymove {
  50% {text-shadow: 10px 20px 30px blue;}
}

@keyframes mymove {
  50% {text-shadow: 10px 20px 30px blue;}
}

</style>
</head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="about.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<div id="top" class="w3-container w3-center w3-animate-zoom">
<h1 style="font-family:papyrus"> <center> LIFE LINE </center> </h1>
</div>


<button class="a b w3-button" > <a href="about1.html"> ABOUT </a> </button>
<button class="a b w3-button"> <a href="faqs.html"> FAQ'S </a> </button>
<button class="a b w3-button"> <a href="chat.php">  CHAT WITH US </a> </button>
<button class="a b w3-button"> <a href="v.html">TUTORIALS </a> </button>
<button class="a b w3-button"> <a href="location.html"> NEAR HOSPITALS  </a>  </button>

<button class="a b w3-button" style="border-radius: 100%;"> <a href="signup.php"> signup </a> </button>

<div class="box" > </br>

<h3> <center> NOTIFICATIONS </center> </h3>

<marquee style="font-size:20px"> *The medicine for cancer is recently invented by the scientists. </marquee>
<marquee style="font-size:20px"> *The government is increasing the services of 108 all over the country. </marquee>
<marquee style="font-size:20px"> *Average lifespan of indians is recorded as 80 years in a survey. </marquee>
<marquee style="font-size:20px"> *10,000 new hospitals are constructed this year. </marquee>
<br> <br> <br>

<form method="post">
<button type="submit" name="app" class="a b w3-button">  APPOINTMENTS  </button>
</div>
</form>
<div class="ss"> <br>
<div class="w3-content w3-section" style="max-width:700px">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
  <img class="mySlides" src="4.jpg" style="width:100%">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="6.jpg" style="width:100%">
</div>
</div>
<?php
 
if(isset($_POST['app']))
	{ echo "<script>alert('Login!! to book an appointment') </script>";
}
?>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


<div class="container" style="margin-top:630px">

<h3 style="text-align:center"> "The greatest disease in the World today is not cancer; it is being unwanted, unloved, and uncared." </h3> 

<p class="w3-large w3-center w3-padding-16">Our Profile:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Service</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Work back</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Availability</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
  </div>
</div>
</br>
</br>
</br>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14K+</span><br>
    Hospitals
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55K+</span><br>
     Doctors 
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89K+</span><br>
    Customers
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150M+</span><br>
    Appointments
  </div>
</div>
</br>
</br>


<video width="1200" height="500" controls loop autoplay>
  <source src="my.mp4" type="video/mp4">
  <source src="my.ogg" type="video/ogg">
</video>
</br>
</br>

      <div class="w3-large w3-margin-bottom">
       <font style="size:40px;"> contact:</font></br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: lifeline@gmail.com<br>
      </div>


<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="about.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right">Top</i></a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="about1.html" title="W3.CSS" target="_blank" class="w3-hover-text-green">Life Line</a></p>
</footer>

</body>
</html>