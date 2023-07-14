<?php 
  include("connection.php");
  $id = $_GET['Id'];
 
$sql = "DELETE FROM `costsharing_officer`  WHERE email='$id'";
$sql1 = "DELETE FROM user WHERE email='$id'";
$run = $con->query($sql);
$run1 = $con->query($sql1);

if($run1 && $run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Data Successfully DLETED!!!")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=costshare.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>