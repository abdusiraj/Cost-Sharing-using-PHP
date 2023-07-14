<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$cos_user=$_SESSION['uname'];
$cos_id=$_SESSION['cos_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cost Sharing | Cost Share Officer</title>
  <!-- plugins:css -->
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
              <?php echo $cos_user; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="Profile.php">
                <i class="ti-settings text-primary"></i>
                Profile
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
          <li class="nav-item ">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="costshare.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Prepare costshare</span>
              
            </a>
            
          </li>

          <li class="nav-item">
            <a class="nav-link" href="students.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Students List</span>
              
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
                  <h3 class="font-weight-bold">Prepare cost share</h3>
                  
                  <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                                include('../connection.php');
                                 $result=$con->query("SELECT count(*) as total from costshare");
                                 $data=$result->fetch_assoc();
                                 $percent = $data['total'];
                                 
                                ?>
                <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">ADD</button>
                
                <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                
                  <h4 class="card-title text-center">Cost sharing</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Year
                          </th>
                          <th>
                            Educational fee <br>
                             (birr)/annual
                          </th>
                          <th>
                          Accommodation (dormitory) fee <br>
                          (birr)/annual
                          </th>
                          <th>
                          Food service fee <br>
                          (birr)/annual
                          </th>
                          <th>
                          Medical fee <br>
                           (birr)/annual
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                  include('../connection.php');
                  $sql1=$con->query("SELECT * from costshare");
                  while($row1=$sql1->fetch_assoc()){
                    $year=$row1['year'];
                  $edu_fee=$row1['edu_fee'];
                  $acc_fee=$row1['acc_fee'];
                  $food_fee=$row1['food_fee'];
                  $medical_fee=$row1['medical_fee'];
                  ?>
                  
                        <tr>
                          <td>
                          <?php echo $year; ?>
                          </td>
                          <td>
                          <?php echo $edu_fee; ?> birr
                          </td>
                          <td>
                          <?php echo $acc_fee; ?> birr
                          </td>
                          <td>
                          <?php echo $food_fee; ?> birr
                          </td>
                          <td>
                          <?php echo $medical_fee; ?> birr
                          </td>
                          
                        </tr>

                        <?php } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
         <!-- Large Modal -->
         <div class="modal fade" id="update" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <form action="updatecostshare.php" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <?php
                              include('../connection.php');
                              $sql=$con->query("SELECT * from costshare");
                              $row=$sql->fetch_assoc();
                              $edu_fee=$row['edu_fee'];
                              $acc_fee=$row['acc_fee'];
                              $food_fee=$row['food_fee'];
                              $medical_fee=$row['medical_fee'];

                               ?>
                               <div class="row g-2">
                               
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">YEAR:</label>
                                  <select type="text" name="year" id="emailLarge" class="form-control" >
                                  <?php 
                                $sql1=$con->query("SELECT * from costshare");
                                while($row1=$sql1->fetch_assoc()){
                                  $year=$row1['year'];
                                
                                ?>
                                  
                                    <option><?php echo $year; ?></option>
                                  <?php } ?>
                                  </select>
                                </div>
                               
                                <div class="col mb-0">
                                  
                                </div>
                              </div>
                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">Educational fee <?php echo $edu_fee; ?> (birr)/annual</label>
                                  <input type="int" name="edu_fee" id="emailLarge" class="form-control" value="<?php echo $edu_fee; ?>" />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobLarge" class="form-label"> Accommodation (dormitory) fee <?php echo $acc_fee; ?> (birr)/annual</label>
                                  <input type="int" name="acc_fee" id="dobLarge" class="form-control" value="<?php echo $acc_fee; ?>" />
                                </div>
                              </div>

                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">Food service fee <?php echo $food_fee; ?> (birr)/annual</label>
                                  <input type="int" name="food_fee" id="emailLarge" class="form-control" value="<?php echo $food_fee; ?>"  />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobLarge" class="form-label">Medical fee <?php echo $medical_fee; ?> (birr)/annual</label>
                                  <input type="int" name="medical_fee" id="dobLarge" class="form-control" value="<?php echo $medical_fee; ?>" />
                                </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                         </form>
                        </div>
                      </div>
        <!-- partial:partials/_footer.html -->

        <div class="modal fade" id="create" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <form action="addcostshare.php" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">

                            <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">YEAR:</label>
                                  <input type="text" name="year" id="emailLarge" class="form-control" />
                                </div>
                                <div class="col mb-0">
                                  
                                </div>
                              </div>
                              
                             
                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">Educational fee (birr)/annual</label>
                                  <input type="int" name="edu_fee" id="emailLarge" class="form-control" />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobLarge" class="form-label"> Accommodation (dormitory) fee (birr)/annual</label>
                                  <input type="int" name="acc_fee" id="dobLarge" class="form-control" />
                                </div>
                              </div>

                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">Food service fee (birr)/annual</label>
                                  <input type="int" name="food_fee" id="emailLarge" class="form-control"  />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobLarge" class="form-label">Medical fee (birr)/annual</label>
                                  <input type="int" name="medical_fee" id="dobLarge" class="form-control"  />
                                </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                          </div>
                         </form>
                        </div>
                      </div>
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
  <!-- End custom js for this page-->
   <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
</body>

</html>

