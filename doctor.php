


<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>doctor search</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<?php
echo "<div class='jumbotron'  style='background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px'></div>

<div class='container'>
<div class='card'>
<div class='card-body' style='background-color:#0080FF'>
<div class='row'>
<div class='col-md-1'>
<a href='user_doc_main_page1(1).php' class='btn btn-light'>go back</a>
</div>
<div class='col-md-3'>Doctor search</div>
<div  class='col-md-8'>
   <form class='form-group' method='post' action='appointment_check(1).php'>
      <div class='row'>
          <div class='col-md-8'>
                <input type='text' placeholder='enter doctor name' name='search_doc' class='form-control'></div>
          <div class='col-md-2'>
                <input type='submit' value='check appointment' class='btn btn-light' class='form-control' name='doc_search_op' ></div>
      </div>
	  </form>
</div>
</div>
</div>
</div>
</div>
<div class='container'>
<div class='card'>
<div  class='card-body' >
<table class='table table-hover' id='table1'>
  <thead>
    <tr>
	  <th scope='col'>ID</th>
      <th scope='col'>Name</th>
      <th scope='col'>Age</th>
      <th scope='col'>Disease</th>
      <th scope='col'>Gender</th>
	  <th scope='col'>Date of joining</th>
	  <th scope='col'>Address</th>
	  <th scope='col'>Status</th>
    </tr>
  </thead>
  <tbody>";
  
  $con=mysqli_connect("localhost","root","root","lifeline");
  if(isset($_POST['doc_search_op']))
	{
	       $search_doctor=$_POST['search_doc'];
		   $query="select * from patient_table where pat_doc='$search_doctor' ";
		   $result=mysqli_query($con,$query);
		   $rows=mysqli_num_rows($result);
		   if($rows== 0){
		          echo "<script>alert('Sorry Doctor $search_doctor,there are no appointments for you')</script>";
				  echo "<script>window.open('user_doc_main_page1(1).php','_self')</script>";
   		 }
 		  while($field=mysqli_fetch_array($result))
		  {
		     $did=$field['pat_id'];
		  	  $dname=$field['pat_name'];
		  	  $dage=$field['pat_age'];
		  	  $ddis=$field['pat_dis'];
		  	  $dgender=$field['pat_gender'];
		  	  $ddoj=$field['pat_doj'];
		  	  $daddr=$field['pat_addr'];
			  
			  echo "<tr>
			         <td>$did</td>
			         <td>$dname</td>
			         <td>$dage</td>
			         <td>$ddis</td>
			         <td>$dgender</td>
			         <td>$ddoj</td>
			         <td>$daddr</td>
					 <td><div class='btn btn-primary' id='cancel_button' style='background-color:red'><i class='fas fa-times'></i></div></td>
				</tr>";
		  }
		   echo "</tbody></table></div></div></div> ";
	}
		   $test='<script>
		                     var  index , table = document.getElementById("table1");
							 for(var i=0;i<table.rows.length;i++)
							 {
							    table.rows[i].cells[7].onclick=function(){
							    var c=confirm("Do you want to cancel the appointment");
								if(c == true)
								{
								      index=this.parentElement.rowIndex;
									  table.delete(index);
									  document.writeln(table.rows[i].cells[0]);
							   }
							   }
					}
				    </script>';
					//$query3="delete from patient_table where pat_id='$test' ";
					//$num=mysqli_affected_rows($con);
					//if($num > 0){
						//echo "your appointment was cancelled Doctor";
					//}
					//else
					   // echo "Your appointment is not cancelled Doctor";
	
?>
</body>