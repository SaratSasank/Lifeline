<?php
session_start();
$a=$_SESSION["name"];
echo "<div class='container' style='font-size:30px;'>$a</br>
</div>";
$i=$_SESSION["p"];

?>




<html>
<head>
    
    <title>User Profile</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    .container
            {
                padding:1%;
            }
            body
            {
                background-color:white;
            }
        </style>
</head>
<body>

        <div class="container">
            <div class="row" style="height:30%;">
            <div class="profile">
                <div class="profile-image">
                    <img src="icon.svg" style="height: 100%;width: 100%;">

<?php
         // echo "<img src='$i' alt='photo of me' />";
    
?>


 </div> 
                 
         
                </div>

<button type="submit" name="edit"> <a href="edit.php"> Edit </a> </button></br></br><br>

                
<div class="profile-stats">
                    <br>
                    <ul>
                    </ul>
                </div>
                <div class="profile-bio">
                    <br>
                    <ul>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="height:60%">
                <table class="table table-striped" style="height:100%;width:100%;font-size:20px">
                    <thead>
                        <tr>
                            <th>Date (YYYY-MM-DD)</th>
                          <!--  <th>Time(HH:MM:SS)</th> -->
                            <th>category</th>
                            <th>hospital</th>
                            <th>doctor</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
     $con=mysqli_connect("localhost","root","root","lifeline");
  $query="select * from pay where name='$a'";
  $resu=mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($resu))
                            {
                                echo "<tr>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['dcat'] . "</td>";
                                echo "<td>" . $row['dhos'] . "</td>";
                                echo "<td>" . $row['dname'] . "</td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        
    
    
</body>
</html>