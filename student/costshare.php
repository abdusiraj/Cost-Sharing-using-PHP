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
include('../connection.php');
$cheker=$con->query("SELECT * from student where stu_id='$stu_id'");
$getcomp=$cheker->fetch_assoc();
$get=$getcomp['status']
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
            <a  class="nav-link" href="Payment.php" >
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
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 
                  
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
                if($get=='complate'){?>
                  
              <?php  } else{
                                include('../connection.php');
                                 $result=$con->query("SELECT count(*) as total from costsharelist where stu_id='$stu_id'");
                                 $data=$result->fetch_assoc();
                                 $percent = $data['total'];
                                 if( $percent==0){
                                ?>
                <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FillForm">Fill Form</button>
                <?php } 
                else{ 
                    $sql5=$con->query("SELECT MAX(`year`) as max_year from costsharelist where stu_id='$stu_id'");
                    $data1=$sql5->fetch_assoc();
                    $max = $data1['max_year'];
                    $tmax=$max+1;

                    $sql6=$con->query("SELECT MAX(`year`) as max_year from costshare");
                    $data2=$sql6->fetch_assoc();
                    $max2 = $data2['max_year'];

                    if($max2 >= $tmax){
                  ?>
                <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update">Fill New Form</button>
                <?php } else{?>

                  <p class="text-primary" ><strong> There is no notification of Cost Sharing </strong> </p>

                  <?php } }  }?>
                  <h4 class="card-title text-center">Cost sharing notification</h4>
                  <?php
                  include('../connection.php');
                  $sql1=$con->query("SELECT * from costshare");
                  $row1=$sql1->fetch_assoc();
                  $edu_fee=$row1['edu_fee'];
                  $acc_fee=$row1['acc_fee'];
                  $food_fee=$row1['food_fee'];
                  $medical_fee=$row1['medical_fee'];
                  $sq=$con->query("SELECT * from student where stu_id='$stu_id'");
                  $rw=$sq->fetch_assoc();
                  ?>
                  <p class="card-description">
                    Name of the student: <u><?php echo $rw['fname']; echo " "; echo $rw['mname']; echo " "; echo $rw['lname']; ?></u>
                  </p>
                  <p class="card-description">
                    Department/Faculity: <u> <?php echo $rw['faculity'] ?> </u>
                  </p>
                  <p class="card-description">
                    Year of admission: <u> <?php echo $rw['year_add'] ?> </u>
                  </p>
                  <p class="card-description">
                    Year of graduation: _____________________________________________________
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Year
                          </th>
                          <th>
                            Educational fee <br>
                            <?php echo $edu_fee; ?> (birr)/annual
                          </th>
                          <th>
                          Accommodation (dormitory) fee <br>
                          <?php echo $acc_fee; ?> (birr)/annual
                          </th>
                          <th>
                          Food service fee <br>
                          <?php echo $food_fee; ?> (birr)/annual
                          </th>
                          <th>
                          Medical fee <br>
                          <?php echo $medical_fee; ?> (birr)/annual
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql7=$con->query("SELECT * from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                        while($row7=$sql7->fetch_assoc()){
                        ?>
                        <tr>
                          <td>
                            <?php echo $row7['year'] ?>
                          </td>
                          <td>
                          <?php echo $row7['edu_fee'] ?>
                          </td>
                          <td>
                          <?php echo $row7['acc_fee'] ?>
                          </td>
                          <td>
                          <?php echo $row7['food_fee'] ?>
                          </td>
                          <td>
                          <?php echo $row7['medical_fee'] ?>
                          </td>
                        </tr>
                       <?php } ?>
                        <tr>
                          <?php
                          $sql8=$con->query("SELECT SUM(`edu_fee`) as edu_fee from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                          $data8=$sql8->fetch_assoc();
                          $max8 = $data8['edu_fee'];

                          
                          $sql9=$con->query("SELECT SUM(`acc_fee`) as acc_fee from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                          $data9=$sql9->fetch_assoc();
                          $max9 = $data9['acc_fee'];

                          $sql10=$con->query("SELECT SUM(`food_fee`) as food_fee from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                          $data10=$sql10->fetch_assoc();
                          $max10 = $data10['food_fee'];

                          $sql11=$con->query("SELECT SUM(`medical_fee`) as medical_fee from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                          $data11=$sql11->fetch_assoc();
                          $max11 = $data11['medical_fee'];
                          ?>
                          
                          <td>
                            Total
                          </td>
                          <td>
                           <?php echo $max8; ?>
                          </td>
                          <td>
                          <?php echo $max9; ?>
                          </td>
                          <td>
                          <?php echo $max10; ?>
                          </td>
                          <td>
                          <?php echo $max11; ?>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <?php
                     $sql12=$con->query("SELECT SUM(`sum`) as summ from costsharelist csl inner join costshare cs on csl.year=cs.year where csl.stu_id='$stu_id'");
                     $data12=$sql12->fetch_assoc();
                     $summ = $data12['summ'];

                     $yu=$con->query("SELECT *from payment where stu_id='$stu_id'");
                     $ryu=$yu->fetch_assoc();
                     $unpaid= $ryu['unpaid'];
                     $paid= $ryu['paid'];
                     $tt=$unpaid-$paid;
                     ?><br>
                    <p><strong>Grand total:  <?php echo $summ;  ?></strong></p>
                    <p><strong>Paid Amount:  <?php echo $paid;  ?></strong></p>
                    <?php if($unpaid==0){ ?>
                    <p><strong>Unpaid Amount:  <?php echo $unpaid;  ?></strong></p>
                    <?php } else {?>
                      <p><strong>Unpaid Amount:  <?php echo $tt;  ?></strong></p>
                      <?php } ?>
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
                             <?php
                             $sql4=$con->query("SELECT * from student where stu_id='$stu_id'");
                             $row=$sql4->fetch_assoc();
                             ?>
                               <p class="card-description">
                                 Name of the student: <u><?php echo $rw['fname']; echo " "; echo $rw['mname']; echo " "; echo $rw['lname']; ?></u>
                              </p>
                              <p class="card-description">
                                 Department/Faculity: <u> <?php echo $rw['faculity'] ?> </u>
                              </p>
                              <p class="card-description">
                                Year of admission: <u> <?php echo $tmax; ?> </u>
                              </p>
                              <p class="card-description">
                                 Year of graduation: _____________________________________________________
                              </p><br>
                              <p class="card-description">
                                 
                              <input type="hidden" name="year_add" id="dobLarge" class="form-control" value="<?php echo $tmax; ?>" />
                              <input type="hidden" name="id" id="dobLarge" class="form-control" value="<?php echo $stu_id; ?>" />

                              <div class="row g-2">
                                

                                <div class="row g-2">
                                <div class="col mb-0">
                                <label for="dobLarge" class="form-label"><strong>Cost Sharing is payable:<strong></label>
                                  <select type="int" name="choice" id="dobLarge" class="form-control">
                                    <option></option>
                                    <option>By providing professional service</option>
                                    <option>To be paid as a deducation from the income after graduation</option>
                                  </select>
                                </div>
                                <div class="col mb-0">
                                  
                                </div>
                              </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                         </form>
                        </div>
                      </div>
        <!-- partial:partials/_footer.html -->

                      <div class="modal fade" id="FillForm" tabindex="-1" aria-hidden="true">
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
                             <?php
                             $sql4=$con->query("SELECT * from student where stu_id='$stu_id'");
                             $row=$sql4->fetch_assoc();
                             ?>
                               <p class="card-description">
                                 Name of the student: <u><?php echo $rw['fname']; echo " "; echo $rw['mname']; echo " "; echo $rw['lname']; ?></u>
                              </p>
                              <p class="card-description">
                                 Department/Faculity: <u> <?php echo $rw['faculity'] ?> </u>
                              </p>
                              <p class="card-description">
                                Year of admission: <u> <?php echo $rw['year_add'] ?> </u>
                              </p>
                              <p class="card-description">
                                 Year of graduation: _____________________________________________________
                              </p><br>
                              <p class="card-description">
                                 
                              <input type="hidden" name="year_add" id="dobLarge" class="form-control" value="<?php echo $rw['year_add']; ?>" />
                              <input type="hidden" name="id" id="dobLarge" class="form-control" value="<?php echo $stu_id; ?>" />

                              <div class="row g-2">
                                

                                <div class="row g-2">
                                <div class="col mb-0">
                                <label for="dobLarge" class="form-label"><strong>Cost Sharing is payable:<strong></label>
                                  <select type="int" name="choice" id="dobLarge" class="form-control">
                                    <option></option>
                                    <option>By providing professional service</option>
                                    <option>To be paid as a deducation from the income after graduation</option>
                                  </select>
                                </div>
                                <div class="col mb-0">
                                  
                                </div>
                              </div>
                              </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                         </form>
                        </div>
                      </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          
        </footer> 
        <!-- partial -->
        <div
                          class="modal fade"
                          id="payment"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Payment Request</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                              </button>
                              </div>
                              <div class="modal-body">Send Payment Request</div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Send Request</button>
                              </div>
                            </div>
                          </div>
                        </div>
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

