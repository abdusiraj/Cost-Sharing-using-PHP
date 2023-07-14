<?php  
include ('../connection.php');
session_start();
$sum=$_POST['sum'];
$code=$_POST['code'];
$id=$_POST['id'];
$unpaid=0;
$check=$con->query("SELECT * FROM `payment` where stu_id='$id'");
$get=$check->fetch_assoc();
$getcode=$get['code'];
if($getcode==$code){
$sql = "UPDATE `payment` SET `paid`='$sum',`unpaid`='$unpaid',`status`='paid' where stu_id='$id' and code='$code'";
$run= $con->query($sql);


if($run ==true)
{
    $sql1 = "UPDATE `costsharelist` SET `status`='paid' where stu_id='$id'";
    $run1 = $con->query($sql1);
    if($run1 ==true)
    {
                                    echo '<script language="javascript">';
                                    echo 'alert("Payment Done Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=Payment.php" />';
                            }
                            else{
                                echo "something error occure".$con->error;
                               
                            }
 }
  else{
      //echo "something error occure".$con->error;
      echo '<script language="javascript">';
      echo 'alert("Error Code!!!")';
      echo '</script>';
      echo '<meta http-equiv="refresh" content="0;url=Payment.php" />';
  }
} else{
    echo '<script language="javascript">';
    echo 'alert("Wrong Code!!!")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content="0;url=Payment.php" />';

}
?>