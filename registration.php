<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>

<body>
	<form class="box" method="post" action="registration.php" >
	
	<table width="607" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><h1><img src="img4.jpg" width="537" height="104" alt=""/>Create Profile</h1></td>
        </tr>
      <tr>
        <td width="159" height="32">Full Name</td>
        <td width="428"><input type="text" name="txtFullName" id="txtFullName" /></td>
      </tr>
      <tr>
        <td height="33">Email Address</td>
        <td><input type="text" name="txtEmail" id="txtEmail" /></td>
      </tr>
      <tr>
        <td height="32">Contact Number</td>
        <td><input type="text" name="txtContact" id="txtContact" /></td>
      </tr>
      <tr>
        <td height="31">Password</td>
        <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
      </tr>
      <tr>
        <td height="31">Confirm Password</td>
        <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="datalist" /></td>
      </tr>
      <tr>
        <td>Type</td>
        <td><br />
          <input type="checkbox" name="chkLadys" id="chkLadys" />
          <label for="chkBooks">Ladys Bags
           
            <input type="checkbox" name="chkGirls" id="chkGirls" />
            Girls Bags<br />
            <br />
          </label></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
             <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Join Now"/>
          <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"/>
        </blockquote></td>
        </tr>
    </table>
	
</body>
	
	<?php
	   if(isset($_POST["btnSubmit"]))
	   {
		   	$fullName = $_POST["txtFullName"];
			$email =$_POST ["txtEmail"];
			$contactNumber = $_POST["txtContact"];
			$password = $_POST ["txtPassword"];
		   
		   
		   if(isset($_POST["chkLadys"])){
			   $in[] = "Ladys Bags";
		   }
		   
		   if(isset($_POST["chkGirls"])){
			   $in[] = "Girls Bags";
		   }
		   
		   
		   $con = mysqli_connect("localhost:3306","root","","shopdb");
					
					if(!$con)
					{
						die("sorry there is a technical issue");
					}
					$sql = "INSERT INTO `tblcustomer` (`email`, `fullName`, `contactNumber`, `password`) VALUES ('".$email."', '".$fullName."', '".$contactNumber."', '".$password."');";
					
					mysqli_query($con,$sql);
		   
		   
		   foreach($in as $type)
		   {
			   $sql = "INSERT INTO `tbltype` (`email`, `type`) VALUES ('".$email."', '".$type."');";
					
					mysqli_query($con,$sql);
		   
		   }
		   mysqli_close($con);
		   header('Location:baglogin.php');
	   }
	?>
</html>