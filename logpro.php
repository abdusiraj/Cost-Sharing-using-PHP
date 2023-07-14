<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cost Sharing</title>
</head>

<body>
<?php  
include ('admin/connection.php');
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
//$pass=md5($Password);


$sql = "select * from user where username='".$UserName."' and pass='".$Password."'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$num_row = $result->num_rows;
$usertype = $row['type'];
$acivation = $row['status'];

if ($num_row==0)
{
echo '<script type="text/javascript" >alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
exit();
}
else if($usertype=="admin" && $acivation =="1")
{
    $sq= "select * from admin where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['admin_id']=$row['admin_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'admin/index.php\';</script>';
} 
else if($usertype=="registrar" && $acivation =="1")
{
    $sq= "select * from registrar where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['reg_id']=$row['reg_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'registerar/index.php\';</script>';
}
else if($usertype=="officer" && $acivation =="1")
{
    $sq= "select * from costsharing_officer where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['cos_id']=$row['cos_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'costshare officer/index.php\';</script>';
} 
else if($usertype=="student" && $acivation =="1")
{
    $sq= "select * from student where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['stu_id']=$row['stu_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'student/index.php\';</script>';
} 
else if($usertype=="accountant" && $acivation =="1")
{
    $sq= "select * from accountant where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['acc_id']=$row['acc_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'accountant/index.php\';</script>';
} 

else{
    echo "Deactivated Account";
 
}
?>

</body>
</html>
