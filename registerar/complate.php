<?php  
include ('../connection.php');
session_start();
$idd=$_POST['idd'];
$comp="complate";

$sql = "UPDATE `student` SET `status`='$comp' where `stu_id`='$idd'";
$run = $con->query($sql);

if($run ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Succefully Costshare complation")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=students.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>