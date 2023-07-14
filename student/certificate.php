&nbsp<!DOCTYPE html>
<html>
<?php 
session_start();
if (isset($_SESSION['uname'])&&$_SESSION['stu_id']!=""){
}
else
{
  header("Location:../index.php");
}
include('../connection.php');
$stu_user=$_SESSION['uname'];
$stu_id=$_SESSION['stu_id'];

	$query = $con->query("SELECT * FROM student where stu_id = '$stu_id' ");
	$row = $query->fetch_assoc();
	



?>
<head>
    <link rel="icon" href="images/logo.jpg">

    <title>Student Grading System</title>

     <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="../text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">

    
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
	<style>
	@media print {  
		@page {
			size:8.5in 13in;
		}
		head{
			height:0px;
			display: none;
		}
		#head{
			display: none;
			height:0px;
		}
		#print{
		position:fixed;
		top:0px;
		margin-top:20px;
		margin-bottom:30px;
		margin-right:50px;
		margin-left:50px;
		}
		}
		#print{
		width:7.5in;
		}
		input {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
}

.foo{
	font-family: "Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif;
	font-size: 24px;
	font-style: italic;
	font-variant: normal;
	font-weight: bold;
	line-height: 24px;
	}
	.p {
	font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
	font-size: 14px;
	font-style: italic;
	font-variant: normal;
	font-weight: 550;
	line-height: 20px;
	 letter-spacing: 2px;
}
	</style>

</head> 
<body style="background-color:white"> 
<span id='returncode'></span>
<div class="col-md-2" id="head">
	<button class="btn btn-info" onclick="print()"><i class="glyphicon glyphicon-print"></i>PRINT</button>
	<a class="btn btn-info" onclick="window.close()">Cancel</a>
	
</div>
<center>
<div id='print'>
<div style="margin-left:.5in;margin-right:.5in;margin-top:.1in;margin-bottom:.1in;line-height:1mm;">

		<p><center><b>ARBA MINCH UNIVERSITY</b></center></p>

		  </div>
		  <div class="row">
		  <div class="col-md-12">
		  <center><p><b><h4>STUDENT'S PERMANENT RECORDS</h4></b></p></center>
		  </div>
          </div>
          <div class="row">
		  <div class="col-md-12">

		
			<tr>
				<td style="width:600px;font-size:12px">
					<label for="" style="">Full Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<b style="font-size:13px;text-transform: uppercase;"><?php echo $row['fname']."  " .  $row['mname']. " " .  $row['lname'] . ""; ?></b>
					<br>
					
					
				</td>
				
				
			</tr>

			
			</table> 
		
		
		
		  </div>
          </div>
         

	
					
		
	
		
	
					
					
		
		
      	<p>


<p style="float:left;margin-left:15px;margin-bottom:20px;">
<div class="col-md-12">
          <hr style="border-color:black;border:1px solid black"></hr>

         <table>
         <tr>
         	<td>
		<center><h3 class="foo"><b>CERTIFICATION</b></h3></center>	
		
		<?php
		$sql= $con->query("SELECT * FROM student where stu_id = '$stu_id'");
		while($row = $sql->fetch_assoc()){
			

		 ?>
		
		
		<p class="p" style="text-align:justify;line-height:5mm;font-transform:capitalize"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I hereby certify that this is the true record of &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo '<u>&nbsp&nbsp&nbsp&nbsp'  . $row['fname'] . ' ' .  $row['mname']  . ' ' . $row['lname'] . '&nbsp&nbsp&nbsp</u>' . '.' ?> This student is eligible on this &nbsp&nbsp&nbsp <?php echo date("d") . 'th'?> &nbsp&nbsp&nbsp day of &nbsp&nbsp&nbsp <?php echo date("M") . ',' . date("y")?> &nbsp&nbsp&nbsp for admission to &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp year as (regular/irregular) student, and has no property responsibility in Arba Minch University. </p>

		<?php
	
		?>
		

		
		<?php
		}
		
		 ?>
			<table>
			<tr>
				<td align="left" style="width:500px">
					<h5>REMARKS:</h5>
				</td>
				<td style="">
					<table>
						
				
					
					<tr>
						<td>
							&nbsp
						</td>
					</tr>

						<tr>
							<td style="width:250px;border-bottom:1px solid black">
								
							</td>
						</tr>
						<tr>
						<td style="width:250px;">
							<center><h5>Costshare Officer</h5></center>
						</td>
					</tr>
					</table>
				</td>

			</tr>
			</table>
         	</td>
         </tr>
         </table>

</div>
</p>

<?php

 $con->close();
?>
</center>
</body>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;

	$.ajax({
		url:'print_log.php?act=form137&id=<?php echo $_GET['id'] ?>',
		success:function(html){
			$('#returncode').html(html);
		}
	});
}
</script>
</html>