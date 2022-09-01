<?php session_start(); ?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
<link rel="stylesheet" type="text/css" href="logstyle.css">
</head>

<body>
	<form class="box" method="post" action="baglogin.php" >
	<tr>
     <td height="299" colspan="2"><table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer">&nbsp;</p>
          <p class="imgcontainer"><img src="img5.png" alt="Avatar" width="63%" height="195" class="avatar" />
            
          </p>
          <div class="container">
            <p>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" required>
            </p>
            <p>
			  
			  <?php
				
				if(isset($_POST["btnsubmit"])){
				
				$userName = $_POST["txtuname"];
				$password = $_POST["txtpassword"];
					
					$con=
					mysqli_connect("localhost:3306","root","","shopdb");
					
					if(!$con)
					{
						die("sorry there is a technical issue");
					}
					$sql = "SELECT * FROM `tblcustomer` WHERE `email` = '".$userName."' AND `password` ='".$password."'";
					
					$results = mysqli_query($con,$sql);
					
					
					if(($userName == "test@email.com")&&($password == "test123"))
				
				{
					$_SESSION["userName"] = $userName;
					header('Location:collection.php');
				}
				else
				{
					echo "Please enter a correct username and a password. ";
				}
					
				}
				?>
			  
			  </p>
    
      <button type="submit" name="btnsubmit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="cnkremember"> Remember me
      </label>
</div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>&nbsp;</td>
      </tr>
    </table></td>
    </tr>
</body>
</html>