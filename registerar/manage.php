<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$admin_id=$_SESSION['reg_id'];
$id = $_GET['Id'];
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cost Sharing | Registrar</title>
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

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
          
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-1 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-10">
            <div class="p-100">
            <?php
            
            ?>
              <div class="card">
              
              <div class="text-center">
              
              
                <h1 class="h4 text-gray-900 mb-4">Student's Detail</h1>
                
                <p style="color:#0000ff;"></p>
              </div>
              <div class="card-body">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM  student  where `stu_id`='$id'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th>Full Name</th>
                      <th>E-mail</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Faculity</th>
                      <th>Year of Addmission</th>
                      
                     
                    </tr>
                  </thead>
            
                  <tbody>
                  <?php
                  
                   while($rowtable=$table->fetch_assoc()){
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                     ?>
                    <td><?php echo $rowtable['fname']; echo " "; echo $rowtable['mname']; echo " "; echo $rowtable['lname'];?></td>
                    <?php
                      echo "<td>".$rowtable['email']."</td>";
                      echo "<td>".$rowtable['age']."</td>";
                      echo "<td>".$rowtable['sex']."</td>";
                      echo "<td>".$rowtable['faculity']."</td>"; 
                      echo "<td>".$rowtable['year_add']."</td>"; 
                       
                      ?>
                   
                        
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>

                   
                   
                  </tbody>
                  </table>  

                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM  costsharelist csl inner join costshare cs on csl.year=cs.year  where csl.stu_id='$id'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th>Year</th>
                      <th>Fee</th>
                      <th>Payment Status</th>
                      
                     
                    </tr>
                  </thead>
            
                  <tbody>
                  <?php
                  
                   while($rowtable=$table->fetch_assoc()){
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                     ?>
                   
                    <?php
                      echo "<td>".$rowtable['year']."</td>";
                      echo "<td>".$rowtable['sum']."</td>";
                      echo "<td>".$rowtable['status']."</td>";
                     
                       
                      ?>
                   
                        
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>

                   
                   
                  </tbody>
                  </table> 
                  <form action="setrespro.php" method="post">
                  
                  
                  
                <div class="form-group pt-2">
                
                <a class="mb-2 mr-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#graduate">Complate</a>
                    <a href="students.php" class="btn btn-block btn-info text-white" type="submit">Back</a>
                </div>
                
               
            </div>

        </div>
  
        </form>  
                
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- Modal For Update Course -->
                        <div
                          class="modal fade"
                          id="graduate"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                        <form action="complate.php" method="post">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Complation</h5>
                                
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              
                              <h4>Are you sure you want to complate this student costshare!!!
                               
                   </h4>
                              if you choose yes the student will get his official trascript..

                              </div>
                              <input type="hidden" name="idd" value="<?php echo $id; ?>" />
                            
                              
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-success">YES</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>


  <!-- Modal For Sete Mark  -->
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

</body>

</html>
