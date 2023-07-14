<?php  
include ('connection.php');
session_start();
$id=$_POST['id'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addres=$_POST['addres'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];



$sql = "UPDATE `accountant` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`address`='$addres',`age`='$age',`sex`='$sex',`uname`= '$uname',`pass`='$pass' WHERE `email`='$id'";
$run = $con->query($sql);

$sql1 = "UPDATE `user` SET `username`= '$uname',`pass`='$pass' where `email`='$email'";
$run1 = $con->query($sql1);

if($run && $run1 ==true)
{

//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=accountant.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>