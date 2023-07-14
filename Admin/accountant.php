<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$admin_id=$_SESSION['admin_id'];
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
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 text-hard" href="index.html">Cost Sharing</a>
        <a class="navbar-brand brand-logo-mini" href="index.html">Cost Sharing</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
             
              
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <?php echo $adm_user; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="Profile.php">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="../logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="costshare.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Cost Share Officer</span>
              
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="mregistrar.php">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Registrare</span>
              
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="accountant.php">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Accountant</span>
              
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Accountant</h3>
                  <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            
           
              <div class="col-lg-15 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Accountant List</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>
                            Full Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                          <th>
                            
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                  <?php    include "connection.php";
                   
                   
                   //$sql="select * from `user` where u_type = `coordinator`";
                   $sql = "SELECT * FROM `accountant`";
                   $run=$con->query($sql);
                   while($row=$run->fetch_assoc()){
                    $id = $row['acc_id'];
                    $fname= $row['fname'];
                    $mname= $row['mname'];
                    $lname= $row['lname'];
                    $email= $row['email'];?>
                          
                          
                          <td><?php echo $fname; echo " "; echo $mname;echo " "; echo $lname;?></td>
                          
                          <td>
                            <?php echo $email; ?>
                          </td>
                          <?php 
                                            $sql2 = "SELECT * FROM `user` where `email`='$email'";
                                            $run2=$con->query($sql2);
                                            $row2=$run2->fetch_assoc();
                                      
                        
                                            ?>
                          <td>
                          <?php if($row2['status'] == 1): ?>
							  <span class="badge badge-sm bg-success">Active</span>
							    <?php elseif($row2['status'] == 0): ?>
								<span class="badge badge-sm bg-danger">Inactive</span>
							    <?php endif; ?>
                          </td>
                          <td>
                          <a rel="facebox" href="updateacc.php?Id=<?php echo $row['email']; ?>" class="btn btn-sm btn-info">Update</a><br>
                          <a rel="facebox" href="deleteacc.php?Id=<?php echo $row['email']; ?>"  class="btn btn-sm btn-danger">delete</a>
                          </td>
                          <td>
                  <div class="d-flex align-items-center">
                    <a href="activeacc.php?Id=<?php echo $row2['email']; ?>" class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></a>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-success text-sm">Active</h6>
                    </div>
                    </div>

                    <div class="d-flex align-items-center">
                    <a href="deactiveacc.php?Id=<?php echo $row2['email']; ?>"  class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></a>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-danger text-sm">Inactive</h6>
                    </div>
                    </div>
                          </td>
                          
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              
                
            
                
              </div>
            </div>
            
          <!-- </div> -->
          
          <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD Accountant</h4>
                 
                  <form class="forms-sample" action="addaccountantpro.php" method="post">
                  <div class="form-group row">
                      <label for="exampleInputUsername2"  class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="fname" class="form-control"  id="exampleInputUsername2" placeholder="First Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Middele Name</label>
                      <div class="col-sm-7">
                        <input type="text" name="mname"  class="form-control" id="exampleInputUsername2" placeholder="Middele Nam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="lname" class="form-control" id="exampleInputUsername2" placeholder="Last Name">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Age</label>
                      <div class="col-sm-9">
                        <input type="text" name="age" class="form-control" id="exampleInputMobile" placeholder="Age">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sex</label>
                      <div class="col-sm-9">
                        <input type="text" name="sex" class="form-control" id="exampleInputMobile" placeholder="sex">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="exampleInputMobile" placeholder="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" id="exampleInputMobile" placeholder="Address">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" name="uname" class="form-control" id="exampleInputMobile" placeholder="Username">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

           <!-- </div> -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
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

