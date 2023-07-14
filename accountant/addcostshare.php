<?php  
include ('../connection.php');
session_start();
$choice=$_POST['choice'];
$year_add=$_POST['year_add'];
$id=$_POST['id'];
$status="Notpaid";

$sql1 = "INSERT INTO `costsharelist`(`stu_id`, `year`, `method`, `status`) VALUES ('".$id."','".$year_add."','".$choice."','".$status."')";
$run1 = $con->query($sql1);


if($run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Cost Share Fill Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=costshare.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>