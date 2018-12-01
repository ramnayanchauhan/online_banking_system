<?php
session_start();
error_reporting(0);

$db=mysqli_connect('localhost','root','','netbanking');

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

//$dts = date("Y/M/D h:i:s");
mysqli_query("UPDATE customers SET lastlogin='$dts' WHERE customerid='$_SESSION[customerid]'");
$sqlq = mysqli_query("select * from transaction where paymentstat='Pending'");
$mailreq = mysqli_query("select * from mail where reciverid='".$_SESSION['customerid']."'");
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Payment System utilizing</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
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
            <p style="float:right; margin-right: 2.2em; color: buttonface; font-family: Satisfy,cursive; font-size: 2.5em;">Banking process</p>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
<div id="toptabmenu">
    <ul>
            <li><a href="accountalerts.php">My accounts</a></li>
            <li><a href="transferfunds.php">Transfer funds</a></li>
            <li><a href="payloans.php">Pay loans</a></li>
            <li><a href="mailinbox.php">Mails</a></li>
            <li><a href="changetranspass.php">Personalise</a></li>
            <li><a href="logout.php">logout</a></li>
    </ul>
    
</div>
</div>

<div id="templatemo_main">
    <div id="sidecon">
        <h2>Alerts and messages</h2>
     		 <table width="548" border="0" id="maintable">
     		   <tr>
     		     <td width="293">Customer Name</td>
     		     <td width="245"><?php echo $_SESSION[customername]; ?></td>
   		     </tr>
     		   <tr>
     		     <td>Branch code</td>
     		     <td><?php echo $_SESSION[ifsccode];?></td>
   		     </tr>
     		   <!--<tr>
     		     <td>User logged on</td>
     		     <td><?php /*?><?php echo $_SESSION[lastlogin]; ?> <?php */?></td>
   		     </tr>-->
     		   <tr>
     		     <td>Pending payments</td>
     		     <td><?php echo mysqli_num_rows($sqlq); ?></td>
   		     </tr>
     		   <tr>
     		     <td>Unread mails</td>
     		     <td><?php echo mysqli_num_rows($mailreq); ?></td>
   		     </tr>
   		   </table>
    </div>
    
    <div id="sidebar">
        <h2>My Accounts</h2>
               
                <ul>
                <li><a href="accountsummary.php">Accounts summary</a></li>
                <li><a href="ministatements.php">Mini statement</a></li>
                <li><a href="accdetails.php">Account details</a></li>
                <li><a href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
