<?php
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','','netbanking');

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$transactionarray = mysqli_query($db,"select * from transactions");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Payment System utilizing</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/favicon.ico" rel="shortcut icon">
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
    <table width="880" border="1">
      <tr>	
        <th width="120" scope="col">TRANSACTION ID</th>
        <th width="95" scope="col">DATE</th>
        <th width="60" scope="col">PAYEE ID</th>
        <th width="95" scope="col">RECEIVER ID</th>
        <th width="104" scope="col">AMOUNT</th>
        <th width="128" scope="col">PAYMENT STATUS</th>
      </tr>
      
      <?php	
 while($transaction = mysqli_fetch_array($transactionarray))
	  {
echo "
      <tr>
        <td>&nbsp;$transaction[transactionid]</td>
        <td>&nbsp;$transaction[paymentdate]</td>
        <td>&nbsp;$transaction[payeeid]</td>
        <td>&nbsp;$transaction[receiveid]</td>
        <td>&nbsp;$transaction[amount]</td>
		<td>&nbsp;$transaction[paymentstat]</td>
      </tr>";
	  }
	  ?>
    </table>
    </div>
   
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
