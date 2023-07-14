<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 
$random=rand(1000,9999);
//$con = new mysqli("localhost","root","","wbde");
//$sql = "DELETE  `coordinator` WHERE `co_id`='$id'";
$sql = "UPDATE `payment` SET `status`='accept',`code`='$random' where stu_id='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    //echo 'alert("Data Successfully DLETED!!!")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=Paymentrequest.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>