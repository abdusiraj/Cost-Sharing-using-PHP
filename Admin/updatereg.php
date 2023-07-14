
<?php 
  include("connection.php");
  $id = $_GET['Id'];
 
  $selExmne = $con->query("SELECT * FROM registrar WHERE email='$id' ")->fetch_ASSOC();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cost Sharing |Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body id="page-top">


<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selExmne['fname']); echo "  "; echo strtoupper   (  $selExmne['mname']);?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" action="updateregpro.php">
     <div class="form-group">
        <legend>First Name</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="" name="fname" class="form-control" required="" value="<?php echo $selExmne['fname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Middle Name</legend>
        
        <input type="" name="mname" class="form-control" required="" value="<?php echo $selExmne['mname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Last Name</legend>
        
        <input type="" name="lname" class="form-control" required="" value="<?php echo $selExmne['lname']; ?>" >
     </div>

     <div class="form-group">
        <legend>Gender</legend>
        <select class="form-control" name="sex">
          <option value="<?php echo $selExmne['sex']; ?>"><?php echo $selExmne['sex']; ?></option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
     </div>

     <div class="form-group">
        <legend>Address</legend>
        <input type="" name="addres" class="form-control" required="" value="<?php echo $selExmne['address']; ?>" >
     </div>

     <div class="form-group">
        <legend>Email</legend>
        <input type="email" name="email" class="form-control" required="" value="<?php echo $selExmne['email']; ?>" >
     </div>
     <div class="form-group">
        <legend>User Name</legend>
        <input type="text" name="uname" class="form-control" required="" value="<?php echo $selExmne['uname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Password</legend>
        <input type="password" name="pass" class="form-control" required="" value="<?php echo $selExmne['pass']; ?>" >
     </div>

     <div class="form-group">
        <legend>Age</legend>
        <input type="int" name="age" class="form-control" required="" value="<?php echo $selExmne['age']; ?>" >
     </div>
     

     
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>

<script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->


  
</body>

</html>





