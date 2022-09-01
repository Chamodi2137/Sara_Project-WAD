<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="orderstyle.css" />
</head>

<body>
<h1>SARA Handbags Ordering</h1>
<form id="form1" name="form1" method="post" action="">
	<table width="736" height="151" border="0" align="center">
		
	<tr>
      <td width="167">Full Name</td>
      <td width="197"><input type="text" name="txtValue" id="txtRValue" required placeholder="Type Your Name"/></td>
      <td width="358"><label for="txtValue"></label></td>
    </tr>
		
	<tr>
        <td>Email Address</td>
        <td><input type="text" name="txtEmail" id="txtEmail"></td>
    </tr>
		
	<tr>
      <td>Contact Number</td>
      <td><label for="txtContact"></label>
      <input type="text" name="txtContact" id="txtContact" contact="[0-10]"/></td>
      <td>Enter Telephone or Mobile Number</td>
    </tr>
		
	
		
	<tr>
      <td>Handbag Color List</td>
      <td>
      <input list="bags"  />
      </td>
      <td>&nbsp;</td>
    </tr>
		
	<tr>
      <td>Number Of Bags</td>
      <td><label for="txtRageNum"></label>
      <input type="number" name="txtRange" id="txtRange" max="100" min="1"/>
      </td>
      <td>Min value is 1 and Maximum value 100</td>
    </tr>
		
	<tr>
      <td>Order Dates</td>
      <td><label for="txtRangeDate"></label>
      <input type="date" id="txtDate" name="txtDate" />
	  <td><p>Enter Correct date</p></td>
    </tr>
		
	<tr>
      <td>Payment Type</td>
      <td>
      <input list="payments"  />
      </td>
      <td>&nbsp;</td>
    </tr>
		
	 <tr>
      <td>Select bag Types: </td>
      <td colspan="2"> 
      <input type="file" id="img" name="img" multiple  />
      </td>
    </tr>
		
	<tr>
      <td>Watch Our New Collections</td>
      <td colspan="2">
      <iframe width="420" height="350" src="https://www.youtube.com//embed/U1j_4yulGMg">
		  </iframe>
		</td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

<datalist id="bags">
	<option value="Pink">
	<option value="Brown">
	<option value="Black">
	<option value="Mix colors">
</datalist>

<datalist id="payments">
	<option value="Credit cards">
	<option value="Debit cards">
	<option value="Other">
	
</datalist>
		
	
</body>
</html>
