<?php  $db=mysqli_connect('localhost','root','','netbanking');
       $uname=$_REQUEST["uname"];
       $password=$_REQUEST["password"];
       
       if ((!($uname==  mysqli_real_escape_string($uname)))||(!($password==  mysqli_real_escape_string($password))))
       {
           header('Location:index.php?error=1');
           exit(0);
       }
       $query1="SELECT * FROM tempusers WHERE  Uname= '$uname' AND Pwd= '$password'";
       $query2="SELECT * FROM users WHERE  Uname= '$uname' AND Pwd= '$password'";
       $qresult1=mysqli_query($db,$query1);
       $num_rows1 = mysqli_num_rows($qresult1);
       $qresult2=mysqli_query($db,$query2);
       $num_rows2 = mysqli_num_rows($qresult2);
       
       if (($num_rows1==0)&&($num_rows2==0))
       {header ('Location:index.php?error=1');}
       else if (($num_rows1==1)&&($num_rows2==0))
          header ('Location:index.php?error=3');
       else
       {   $arr=mysqli_fetch_array($qresult2);
           $fname=$arr['Fname'];
           $uname=$arr['Uname'];
           session_start();
           $_SESSION['fname']=$fname;
           $_SESSION['user']=$uname;
           session_write_close();
           header('Location:Welcome.php');
       }
       ?>