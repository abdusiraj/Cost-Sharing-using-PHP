<?php  
include ('../connection.php');
session_start();
$sum=$_POST['sum'];
$id=$_POST['id'];
$status="requested";
$request=$con->query("SELECT * from `payment` where stu_id= '$id'");
$row=$request->num_rows;
if($row==0){
$sql1 = "INSERT INTO `payment`(`stu_id`,`unpaid`,`status`) VALUES ('".$id."','".$sum."','".$status."')";
$run1 = $con->query($sql1);


if($run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Payment Request Send Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=Payment.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
} else {
  $sql1 = "UPDATE `payment` SET `unpaid`='$sum',`status`='$status' where stu_id='$id'";
  $run1 = $con->query($sql1);
  
  
  if($run1 ==true)
  {
  //header("Location:admin/index.php");
                                      echo '<script language="javascript">';
                                      echo 'alert("Payment Request Send Succefully")';
                                      echo '</script>';
                                      echo '<meta http-equiv="refresh" content="0;url=Payment.php" />';
                              }
  
    else{
        echo "something error occure".$con->error;
    }

}
?>