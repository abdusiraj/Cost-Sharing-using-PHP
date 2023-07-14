<?php  
include ('../connection.php');
session_start();
$edu_fee=$_POST['edu_fee'];
$acc_fee=$_POST['acc_fee'];
$food_fee=$_POST['food_fee'];
$medical_fee=$_POST['medical_fee'];


$sql = "UPDATE `costshare` SET `edu_fee`='$edu_fee',`acc_fee`='$acc_fee',`food_fee`='$food_fee',`medical_fee`='$medical_fee'";
$run = $con->query($sql);

if($run ==true)
{

//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Data Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=costshare.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>