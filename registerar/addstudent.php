<?php  
include ('../connection.php');
session_start();
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addres=$_POST['address'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$facu=$_POST['facu'];
$yadd=$_POST['yadd'];

$type="student";
$active=1;


$emailexist =$con->query ("SELECT * from `user` where `email`='$email'");

if($emailexist->num_rows == 0){


$sql = "INSERT INTO `student`(`fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`, `faculity`, `year_add`) VALUES ('".$fname."','".$mname."','".$lname."','".$addres."','".$email."','".$age."','".$sex."','".$uname."','".$pass."','".$facu."','".$yadd."')";
$run = $con->query($sql);

$sql1 = "INSERT INTO `user`(`username`, `pass`, `email`, `status`, `type`) VALUES ('".$uname."','".$pass."','".$email."', '".$active."','".$type."')";
$run1 = $con->query($sql1);






if($run && $run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Created Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=students.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
}
else{

  echo '<script language="javascript">';
     echo 'alert("email allready exist please use an other email")';
      echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=students.php" />';
}
?>