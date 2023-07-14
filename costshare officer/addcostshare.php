<?php  
include ('../connection.php');
session_start();
$edu_fee=$_POST['edu_fee'];
$acc_fee=$_POST['acc_fee'];
$food_fee=$_POST['food_fee'];
$medical_fee=$_POST['medical_fee'];
$year=$_POST['year'];
$sum=$edu_fee + $acc_fee + $food_fee + $medical_fee;

$sql1 = "INSERT INTO `costshare`(`year`,`edu_fee`, `acc_fee`, `food_fee`, `medical_fee`, `sum`) VALUES ('".$year."','".$edu_fee."','".$acc_fee."','".$food_fee."', '".$medical_fee."', '".$sum."')";
$run1 = $con->query($sql1);


if($run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Created Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=costshare.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>