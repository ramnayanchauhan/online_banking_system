<?php
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','','netbanking');
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if (isset($_SESSION['employeeid']))
{
    header("Location:employeeacount.php");
}
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Payment System utilizing</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
     <div id="templatemo_main">
        <div class="image view"><img src="images/iron bank.jpg" alt="The Iron Bank" title="The Iron Bank" /><div class="mask">  
     <h2>CHAIRMAN</h2>  
     <p>M. K. Sharma, Chairman</p><br/><br/>
     <h2>EXECUTIVE DIRECTOR</h2>  
     <p>Uday Chitale</p>
     
     </div></div>
         <div class="brcont"><h2>ICICI Bank</h2><br/>ICICI Bank, stands for Industrial Credit and Investment Corporation of India, it is an Indian multinational banking and financial services company headquartered in Mumbai, Maharashtra, India, with its registered office in Vadodara11-04-2018.<br/><br/>
             <span style="font-size:24px;color:red; text-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,
                   0 0 20px #fff;"><u>BANKING HOURS</u></span><br/>
<table><tr><td id="td">Mon-Thur :</td><td> &nbsp;&nbsp;8:00 AM to 3:30 PM</td></tr>	
<tr><td id="td">Friday :</td><td> &nbsp;&nbsp;8:00 AM to 5:00 PM</td></tr>	
<tr><td id="td">Saturday :</td><td> &nbsp;&nbsp;8:30 AM to Noon</td></tr></table>
  </div><hr/><br/>
         <div style="border:thin solid silver; width:300px;height:230px; text-align:center;margin-left:15px;float:left;margin-top:2em;">
           <div id="cf4" class="hover">
              <div class="top" style="width:280;height:220;">
                  <h2>CEO</h2>  
     <p>Aditya Puri</p><br/><br/>
     <h2>MANAGING DIRECTOR</h2>  
     <p>Mr. Keki Mistry</p></div>
              <img class="bottom" src="images/webster_bank.jpg" alt="Webster Bank" name="VidSet" width="280" height="220">
           </div>
              </div>
         <div class="web" ><h2>HDFC BANK</h2>
         HDFC Bank Limited is an Indian banking and financial services company headquartered in Mumbai, Maharashtra. It has 84,325 employees and has a presence in Bahrain, Hong Kong and Dubai. HDFC Bank is India’s largest private sector lender by assets..<br/><br/>
         <span style="font-size:24px;color:red; text-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,
                   0 0 20px #fff;"><u>BANKING HOURS</u></span><br/>
<table><tr><td id="td">Mon-Fri :</td><td> &nbsp;&nbsp;9:00 AM to 4:30 PM</td></tr>	
<tr><td id="td">Saturday :</td><td> &nbsp;&nbsp;9:30 AM to 1:30 PM</td></tr></table>
         </div>
     </div>
   </div>
    <?php include'footer.php' ?>
</body>
</html>

