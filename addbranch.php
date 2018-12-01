<?php
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','','netbanking');

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$m=date("Y-m-d");
if(isset($_POST["addbranch"]))
{
$sql="INSERT INTO branch (ifsccode, branchname,city,branchaddress,state,country) VALUES ('$_POST[ifsccode]','$_POST[branchname]','$_POST[city]','$_POST[branchaddress]','$_POST[country]','$_POST[state]')";

if (!mysqli_query($db,$sql))
  {
  die('Error: ' . mysqli_error());
  }
else $mess = "1 record added";
}
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Payment System utilizing</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function valid()
{
	if(document.form1.ifsccode.value=="")
	{
		alert("Invalid ifsccode");
		return false;
	}
	if(document.form1.branchname.value=="")
	{
		alert("Invalid branchname");
		return false;
	}
	
     if(document.form1.city.value=="")
	  {
		alert("Invalid city");
		return false;
	  }
	 
}

  function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 65 && charCode < 91 )
      	 {              
		 return true;
	 }
	 else if (charCode > 96 && charCode < 122 )
      	 {
		 return true;
	 }
	 else
	 {
                             alert("should be alphabet");
	  	return false;
	 }
     }
</script>

</head>
<body>
   <img id="contain" src="images/saving.jpg">
    <div><img src="" id="batimg1"><img src="" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    <div class="mainbox">
        <img src="images/loog.jpg" width="200" height="100" style="float:left; margin:2em 2em;">
        <div id="site_title">
        
            <h1 style="margin-top: 30px;"><a href="index.php" style="color:yellow; text-decoration: none; margin-left: 1em;"><span>Online Payment System utilizing</span></a></h1>
            <p style="float:right; margin-right: 2.2em; color: buttonface; font-family: Satisfy,cursive; font-size: 2.5em;">Banking Process</p>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
<div  id="toptabmenu">
    <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    
</div>
</div>

<div id="templatemo_main">
    <div id="sidecon">
        
          <table width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
</table>
        
        <label for="ifsccode"></label>
         <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <table width="739" border="0">
          <?php if(isset($mess)) echo "<h1>$mess</h1>"; ?>
        <tr>
          <th height="36" scope="row">IFSC CODE </th>
          <td><input type="text" name="ifsccode" id="ifsccode" /></td>
        </tr>
        <tr>
          <th height="38" scope="row">BRANCH NAME</th>
          <td><input type="text" name="branchname" id="branchname"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="32" scope="row"><label for="city">CITY</label>          </th>
          <td><input type="text" name="city" id="city"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="97" scope="row"><label for="branchaddress2">BRANCH ADDRESS</label>          </th>
          <td><textarea name="branchaddress" id="branchaddress" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <th height="39" scope="row"><label for="country2">COUNTRY</label>          </th>
          <td><select name="country" id="country">
            <option value="Select">SELECT</option>
            <option value="INDIA">INDIA</option>
          </select></td>
        </tr>
        <tr>
          <th height="37" scope="row"><label for="state2">STATE</label>          </th>
          <td><select name="state" id="state">
		  <option value="Select">SELECT</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
	  <option value="Assam">Assam</option>
	  <option value="Bihar">Bihar</option>
	  <option value="Chhattisgarh">	Chhattisgarh</option>
	  <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="addbranch" id="addbranch" value="ADD BRANCH" /></td>
        </tr>
      </table>
             <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    </form>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
