<?php
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','','netbanking');
if(($_REQUEST['error'])=='nologin')
    $logininfo="Please Sign In to Continue";
else if(($_REQUEST['error'])=='forgetpass')
    $logininfo="Please contact the nearest branch";
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if ((isset($_REQUEST['login'])))
{
$username=$_POST['login'];
$password=$_POST['password'];
$query = "SELECT *FROM customers WHERE loginid='$username' AND accpassword='$password'";
$res=  mysqli_query($db,$query);
if(mysqli_num_rows($res)==1)
	{
		while($recarr=mysqli_fetch_array($res))
		{
			
		$_SESSION['customerid'] = $recarr['customerid'];
		$_SESSION['ifsccode'] = $recarr['ifsccode'];
		$_SESSION['customername'] = $recarr['firstname']. " ". $recarr['lastname'];
		$_SESSION['loginid'] = $recarr['loginid'];
		$_SESSION['accstatus'] = $recarr['accstatus'];
		$_SESSION['accopendate'] = $recarr['accopendate'];
		$_SESSION['lastlogin'] = $recarr['lastlogin'];		
		}
		$_SESSION["loginid"] =$_POST["login"];
		header("Location: accountalerts.php");
	}
else{
	$query="SELECT * FROM employees WHERE loginid='$username' AND password='$password'";
	$res=mysqli_query($db,$query);
	if(mysqli_num_rows($res)==1)
	{
		$_SESSION["adminid"] =$_POST["login"];
		header("Location: admindashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}
}
}
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
            <p style="float:right; margin-right: 2.2em; color: buttonface; font-family: Satisfy,cursive; font-size: 2.5em;">Banking Process</p>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
<div id="toptabmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="branches.php">Branches</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/New_Account.pdf">New Account form</a></li>
                 <li><a href="">Loan Forms</a>
                 <ul>
                <li><a href="downloads/home_loan_application_form.pdf">Home Loan</a></li>
                 <li><a href="downloads/Car_Loan_Application_Form.pdf">Car Loan</a></li>
                  <li><a href="downloads/Education_Loan_Application_Form.pdf">Educational Loan</a></li>
            </ul>
                 </li>
                  <li><a href="downloads/ChequeBook_Request.pdf">Cheque book request</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    
</div>
</div>

<?php if(isset($logininfo))
    {  echo"<div class='logmainbox' style='width:450px;'><h1>$logininfo</h1></div>"; } ?>    
             <div class="logmainbox">
        <form action="login.php" method="POST">
            <h1>Sign In</h1>
            <div class="loginset">
                <p>
                    <label class="Ltext">Username</label>
                    <input type="text" name="login" class="loginput">
                </p>
                <p>
                    <label class="Ltext" for="password">Password</label>
                    <input type="password" name="password" class="loginput">
                </p>
            </div>
            <p class="p-container">
                <a href="login.php?error=forgetpass">Forgot password ?</a><br/>
                <input type="submit" name="go" id="go" value="Log in" class="loginput">
            </p>
        </form>
    </div>
    </div>
<?php include'footer.php' ?>
</body>
</html>