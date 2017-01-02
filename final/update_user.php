

<?php
session_start();
  if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header {
            padding: 2em;
            color: white;
            background-color: black;
            text-align: center;
            clear: left;
        }

        nav {
            float: left;
            max-width: 100%;
            margin: 1px;
            padding: 9em;
            background-color: aquamarine;
        }

        article {
            margin-left: 360px;
            border-left: 1px solid gray;
            padding: 2.8em;
        }
        footer {
            padding: 1em;
            color: white;
            background-color: black;
            text-align: center;
            clear: left;
        }



    </style>

    <meta charset="UTF-8">
    <title>HTML</title>
    <div class="container">
        <header>
            <h1>Content House Ltd</h1>
        </header>
       <nav>
            <ul style="list-style-type: disc">
                <li><a href="insert.php">Create  </a></li>
                <li><a href="update.php">UPdate </a></li>
                <li><a href="delete.php">Delete</a></li>
                <li><a href="show.php">View</a></li>
            </ul>
			<br><br>
			<h2><a href = "logout.php">Sign Out</a></h2>
			
        </nav>

        <article>
             <h1><a href = "insert.php">Please Update your Information!!</a></h1>
		   <div class="comment">
			 
			  <tbody><tr>
				<td valign="top"><form id="form2" name="form2" method="GET" action="update_cmt.php">
				<input type="hidden" name="id"  value="<?php echo $_GET['id'];?>" />
				  <table class="border" align="center" border="0" cellpadding="2" cellspacing="2" width="98%">
					<tbody><tr>
					  <td colspan="3" class="heading" style="padding-top:8px; color:#0066FF;" valign="top" height="35"><span class="style2"><strong>Information :</strong></span></td>
					</tr>
					<tr>
					  <td width="34%">Name:</td>
					  <td  width="66%"><input name="name" value="<?php echo $_GET['name'];?>" style="width:180px; height:20px;" type="text"></td>
					</tr>
					<tr>
					  <td>Gender:</td>
					  <td>
					   
						<select name="Gender"<br/>
						<option value="male">Male</option>
						<option value="Female">Female</option>
						<option value="Others">others</option>
					  </td>
					</tr>
					<tr>
					  <td> Education:</td>
					  <td >
					   <select name="education"><br/>
					   <option value="Graduate">Graduate</option>
					   <option value="HSC">HSC</option>
					   <option value="SSC">SSC</option>
					   <option value="Others">OHTERS</option>
					   </select>
					   <br/>
					  </td>
					</tr>
					<tr>
					  <td >Phone no:</td>
					  <td >
							<input name="phone"  type="tel"  title='Phone Number' value="<?php echo $_GET['pn_num'];?>" required style="width:180px;" /> 
					  </td>
					</tr>
					<tr>
					  <td >Email ID:</td>
					  <td ><input name="email" type="email" value="<?php echo $_GET['email'];?>" style="width:180px; height:20px;" type="text"required></td>
					</tr>
					<tr>
					  <td>Comment :</td>
					  <td><textarea name="cmt" name="cmt"  rows="5" cols="" style="width:180px;"required><?php echo $_GET['cmt'];?></textarea></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2"><table border="0" cellpadding="0" cellspacing="0" width="100%">
						  <tbody><tr>
							<td width="38%"><input name="imageField2" src="submit.gif" type="image"></td>
						  </tr>
					  </tbody></table></td>
					</tr>
				  </tbody></table>
				  </form>
				</td>
			  </tr>
			</tbody></table></td>
			</a></div>
        </article>
        <footer>
            <h1>Copyright © Content House Ltd</h1>
        </footer>


    </div>
</head>
<body>

</body>
</html>




