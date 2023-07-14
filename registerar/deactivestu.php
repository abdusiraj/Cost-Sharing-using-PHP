<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 

//$con = new mysqli("localhost","root","","wbde");
//$sql = "DELETE  `coordinator` WHERE `co_id`='$id'";
$sql = "UPDATE `user` SET `status`=0 where email='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    //echo 'alert("Data Successfully DLETED!!!")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=students.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>