<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$stu_user=$_SESSION['uname'];
$stu_id=$_SESSION['stu_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cost Sharing | Student</title>
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
              <?php echo $stu_user; ?>
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
          <li class="nav-item">
            <a class="nav-link" href="costshare.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Cost Share</span>
              
            </a>
            
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="Payment.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Payment</span>
              
            </a>
            
          </li>
          <?php 
          include('../connection.php');
          $sqll=$con->query("SELECT * from student where stu_id='$stu_id'");
          $roww=$sqll->fetch_assoc();
          $status=$roww['status'];
          if($status=="complate"){
          ?>
          <li class="nav-item">
            <a class="nav-link " href="certificate.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Get Certificate</span>
              
            </a> 
          </li>
          <?php } ?>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
        
         <?php 
         include('../connection.php');
               $sqq=$con->query("SELECT count(*) as tot from payment where stu_id='$stu_id'");
               $rww=$sqq->fetch_assoc();
               $take= $rww['tot'];

               $yu=$con->query("SELECT *from payment where stu_id='$stu_id'");
               $ryu=$yu->fetch_assoc();
               $status= $ryu['status'];
               $code= $ryu['code'];
               $unpaid= $ryu['unpaid'];
               $paid= $ryu['paid'];
               if($take>=1 && $status=="accept"){
         ?>
         <p class="text-success"><strong>Your payment request is accepted </strong></p>
         <p class="text-black"><strong>and  </strong></p>
         <p class="text-primary"><strong>Your Payment Code is: <?php echo $code; ?> </strong></p>
         <a type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mkpay" >
              
              <span class="menu-title">Make Payment</span>
              
            </a><br>
            <?php } else if($take>=1 && $status=="paid"){ ?>
              
              
              <span class="menu-title">Your Cost Sharing Paid Succefully!!</span><br>
              <span class="menu-title">Paid Amount is: <?php echo $paid; ?></span>
              

            <?php } else { ?>
              <a type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#payment" >
              
              <span class="menu-title">Send Payment Request</span>
              
            </a><?php } ?>
            
        </div>
        <!-- content-wrapper ends -->
                      <div
                          class="modal fade"
                          id="payment"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                        <form action="payrequest.php" method="post">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Payment Request</h5>
                                <?php 
                                include('../connection.php');
                               $sql8=$con->query("SELECT SUM(`sum`) as summ from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                               $data8=$sql8->fetch_assoc();
                               $summ = $data8['summ'];
                                ?>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">Are you sure you want to send request!!!<br>
                              

                              </div>

                              <input type="hidden" name="sum" value="<?php echo $summ; ?>">
                              <input type="hidden" name="id" value="<?php echo $stu_id; ?>">
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Send</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>
        <!-- partial:partials/_footer.html -->

        <!-- content-wrapper ends -->
        <div
                          class="modal fade"
                          id="mkpay"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                        <form action="pay.php" method="post">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Make Payment</h5>
                                <?php 
                                include('../connection.php');
                               $sql8=$con->query("SELECT SUM(`sum`) as summ from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                               $data8=$sql8->fetch_assoc();
                               $summ = $data8['summ'];
                                ?>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              
                              CODE:<input type="text" name="code">

                              </div>

                              
                              
                              <input type="hidden" name="sum" value="<?php echo $unpaid; ?>">
                              <input type="hidden" name="id" value="<?php echo $stu_id; ?>">

                              
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Pay</button>
                              </div>
                            </div>
                          </div>
                        </form>
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
</body>

</html>

