<?php  
include ('../connection.php');
session_start();
$choice=$_POST['choice'];
$year_add=$_POST['year_add'];
$id=$_POST['id'];
$status="Notpaid";

$select=$con->query("SELECT * from costshare where `year`='$year_add'");
$adata=$select->fetch_assoc();
$sum=$adata['sum'];


$sql1 = "INSERT INTO `costsharelist`(`stu_id`, `year`, `method`, `status`) VALUES ('".$id."','".$year_add."','".$choice."','".$status."')";
$run1 = $con->query($sql1);

$sql = "UPDATE `payment` SET `unpaid`='$sum', `status`='notpaid' where stu_id='$id'";
$run = $con->query($sql);

if($run1 && $run ==true)
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