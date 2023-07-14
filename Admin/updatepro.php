<?php  
include ('connection.php');
session_start();
$id=$_POST['id'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addres=$_POST['addres'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];



$sql = "UPDATE `admin` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`address`='$addres',`uname`= '$uname',`pass`='$pass' WHERE `email`='$id'";
$run = $con->query($sql);

$sql1 = "UPDATE `user` SET `username`= '$uname',`pass`='$pass' where `email`='$id'";
$run1 = $con->query($sql1);

if($run && $run1 ==true)
{

//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=profile.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>