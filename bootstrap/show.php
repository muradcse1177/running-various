<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location: index.php");
}
if(isset($_GET['submit'])){
	if( strlen($_GET['username'])>0 && strlen($_GET['month'])>0 && strlen($_GET['year'])>0  && strlen($_GET['day']) < 1 ) {
        include('connection.php');	
		$_SESSION['name'] =$_GET['username'];
		$year=$_GET['year'];
		$_SESSION['year']=$year;
		$montha=$_GET['month'];
		$date = $montha;
		$month = date('m', strtotime($date));
		$_SESSION['month']=$montha;
		$_SESSION['montha']=$month;
		$_SESSION['day'] ="faka";
		echo $_SESSION['day']; 
		header("location:final_show.php");
	}
	else if(strlen($_GET['day'])>0 && strlen($_GET['month'])>0 && strlen($_GET['year'])>0  && strlen($_GET['username']) < 1 ){
	    include('connection.php');
		$day=$_GET['day'];	
		$_SESSION['day'] =$day;
		$year=$_GET['year'];
		$_SESSION['year']=$year;
		$montha=$_GET['month'];
		$date = $montha;
		$month = date('m', strtotime($date));
		$_SESSION['month']=$montha;
		$_SESSION['montha']=$month;
		$_SESSION['name']="faka";
		echo $_SESSION['name'];
		header("location:final_show.php");
	}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
    .navbar {
            margin-bottom: 0;
            border-radius: 0;
            padding: 15px;
			background-color: GRAY;
	         text-align:center;
    }
	#index h1 {
            color:red;
    }   
    .row.content {height: 450px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    footer {
            background-color: gray;
            color: white;
            padding: 2%;
    }
	th, td {
          border:1px solid black;
        }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
	      <div id="index">
            <img src="chlogo.png" alt="Logo" style="width:500px;height:70px;">
          </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
		<div class="col-sm-2 sidenav">
		   <div class="btn-group-vertical">
		   			<button onclick="window.location.href='attendance.php'" type="button" class="btn btn-primary">Daily Attendance</button>			
			        <?php
			        if ($_SESSION['catagory']==1){
				    ?>
				   <button onclick="window.location.href='show.php'" type="button" class="btn btn-primary">Show Attendance</button>
				  <?php
			      }
			     else{
				 ?>
				   <button onclick="window.location.href='show_hr.php'" type="button" class="btn btn-primary">Show Attendance</button>
				  <?php
			     }
			    ?>
				

		   </div>
		</div>

			<div class="col-sm-8 text-left">
			    <h1> Attendance Sheet</h1>

                <form action="" method="GET" id="attendance_form"> 
				 					
					 <select type="text" id="id0" name="username" placeholder = "Enter employee name"  class="form-control" style="width:300px">
							<option value="">Select Name</option>
					 <?php
						include('connection.php');
						$usernam= $_SESSION['login_user'];
						$sql = "SELECT distinct(username),designation FROM profile1 where username='$usernam'";
                        $result = $connection->query($sql);
						if ($result->num_rows > 0) {
							 while($row = $result->fetch_assoc()){
								 $_SESSION['desig']=$row['designation'];
								?>
									<option value="<?php echo $row['username'];?>"><?php echo $row['username'];?></option>
								<?php
							}
						}
				     ?>
					 </select><br>
					 <select id="mySelecty" name="year" class="form-control" style="width:300px">
							  <option value="">Select Year</option>		
							  <option value="2014">2014</option>
							  <option value="2015">2015</option>
							  <option value="2016">2016</option>
							  <option value="2017">2017</option>
							  <option value="2018">2018</option>
					</select><br>
					<select id="mySelectm" name="month" class="form-control" style="width:300px">
					          <option value="">Select Month</option> 
							  <option value="January">January</option>
							  <option value="February">February</option>
							  <option value="March">March</option>
							  <option value="April">April</option>
							  <option value="May">May</option>
							  <option value="June">June</option>
							  <option value="July">July</option>
							  <option value="August">August</option>
							  <option value="September">September</option>
							  <option value="October">October</option>
							  <option value="November">November</option>
							  <option value="December">December</option>						  
					      <select><br>

	  
                    <input type="submit" name = "submit" class="form-control" style="width:100px"> 
			    </form><br><br><br>					
			</div> 
			
			<div>
		    <div class="col-sm-8 text-left">  			
		  
		</div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright © Content House Ltd</p>
</footer>

</body>
</html>
