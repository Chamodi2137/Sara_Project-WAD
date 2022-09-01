<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td {
	font-family: "Arial Black", Gadget, sans-serif;
}
</style>
	
<script>
function validateName()
	{
		var memberId = document.getElementbyId("txtName").value;
		var a1 = memberId.indexOf("M");
		var a2 = memberId.indexOf("-");
		var len = memberId.length;
		var d = new Date();
		var n = d.getFullYear();
  
		if((len-a1 == 3) || (a1-a2 > 0) || (a2 == n))
			{
				return true;
			}
				else
					{
						alert("Please enter valid Name");
						return false;
					}
		
	}
	

function validateAddress()
	{
		var address = document.getElementById("txtAddress").value;
		if(address="" || address==null)
			{
				alert("Please Enter the Address");
				return false;
			}
		return true;
	}
	
function validateContactNum()
	{
		var contact = document.getElementById("txtContactNum").value;
		var first = con.indexOf("0");
		var second = con.lastIndexOf("7");
		if((isNaN(contact)) || (contact.length ! =10))
			if((first == 0) && (second == 7))
		{
			alert("Please enter a valid contact number");
			return false;
		}
		return true;
	}
	
function validateMagazine()
	{
		var magazine = document.getElementById("chkV").value;
		
		if((isNaN(magazine>=3)) || (magazine <=1))
		{
			alert("Please enter a valid number of magazine");
			return false;
		}
		return true;
	}
	
function validateSubscriptionTime()
	{
		if(document.getElementById("lstInterest").checked)
			{
				return true;
			}
		alert("Please select one type");
		return false;
	}
	
//-----------------------------------------------------------------------------
	
function validate()
	{
		if(validateName() && validateAddress() && validateContactNum() && validateMagazine() && validateSubscriptionTime() )
			{
				alert("Subscription has been added");
			}
		else{
				event.preventDefault();
			}
	}

	
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="535" height="360" border="0">
    <tr>
      <td height="39" colspan="2"><h1>Delivery Page</h1></td>
    </tr>
    <tr>
      <td height="39">Membership ID</td>
      <td><label for="txtName"></label>
      <input type="text" name="txtName" id="txtName" /> 
      ex M123-3423-2019</td>
    </tr>
    <tr>
      <td width="173" height="39">Delivery Address</td>
      <td width="352"><label for="txtAddress"></label>
      <textarea name="txtAddress" id="txtAddress"></textarea></td>
    </tr>
    <tr>
      <td height="31"><p>Contact Number</p></td>
      <td><p>
        <input type="text" name="txtContactNum" id="txtContactNum" />
ex 0711111111<br />
      </p></td>
    </tr>
    <tr>
      <td height="35"><p>Colour </p></td>
      <td><input type="checkbox" name="chkV" id="chkV" />
        <label for="chkV"></label>        
        Pink <br />
        <label>
<input type="checkbox" name="chkT" id="chkT" />
Black<br />
          <input type="checkbox" name="chkR" id="chkR" />
          Brown<br />
          <input type="checkbox" name="chkH" id="chkH" />
          Mix colours <br />
        </label></td>
    </tr>
    <tr>
      <td height="33"><p> Time</p></td>
      <td><label for="txtContactNum">
        <select name="lstInterest" id="lstInterest">
          <option selected="selected">........................</option>
          <option value="1">1 days</option>
          <option value="2">2 days</option>
          <option value="3">3 days</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
      <td><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" onClick="validate()" />
      <input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
    </tr>
    <tr>
      <td height="25" colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
