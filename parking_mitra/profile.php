<?php
session_start();
$Result = $_SESSION['email'];
$host = "localhost";
$username = "root";
$password = "";
$database = "parking_mitra";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the data from the form
  $newName = $_POST["name"];
  $newMobile = $_POST["mobile"];
  $newAddress = $_POST["address"];
  $newPassword = $_POST["password"];
  
  $emailToSearch = $_POST["email"];
  $userIdQuery = "SELECT id FROM user_details WHERE email = '$emailToSearch'";
  
  $result = $conn->query($userIdQuery);
  
  if ($result->num_rows > 0) {
      // Fetch the user ID
      $row = $result->fetch_assoc();
      $userId = $row["id"];
      
      // Construct the SQL UPDATE query
      $sql = "UPDATE user_details SET name = '$newName', mobile = '$newMobile', address = '$newAddress', password = '$newPassword' WHERE id = '$userId'";
      // Execute the update query
      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . $conn->error;
      }
  } else {
      echo "User not found.";
  }
  // Redirect back to profile page after update
  header("Location: index6.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Parking Mitra</title>

  <!-- Custom fonts for this template-->
  <link href="ap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="ap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index6.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-motorcycle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Parking Mitra</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index6.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="order.php">
          <i class="fas fa-fw fa-qrcode"></i>
          <span>Order QR</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Log Out</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="ap/img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="container">

              <!-- Outer Row -->
              <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                  <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="p-5">
                            <form class="user" method="post" enctype="multipart/form-data">

                              <div class="form-group">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-user" id="name" name="name" value="<?php echo $row["name"]; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="title" class="form-label">Mobile </label>
                                <input type="text" class="form-control form-control-user" id="mobile" name="mobile" value="<?php echo $row["mobile"]; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="title" class="form-label">E-Mail </label>
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $row["email"]; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="desc" class="form-label">Address</label>
                                <textarea class="form-control form-control-user" id="address" name="address" rows="2"><?php echo $row["address"]; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label for="title" class="form-label">Current Password</label>
                                <input type="password" class="form-control form-control-user" id="password" name="password" value="<?php echo $row["password"]; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="title" class="form-label">New Password</label>
                                <input type="password" class="form-control form-control-user" id="password" name="password" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="title" class="form-label">Confirm Password</label>
                                <input type="text" class="form-control form-control-user" id="password" name="password" aria-describedby="emailHelp">
                              </div><br>
                              <button type="submit" name="insert" class="btn btn-primary">Save Changes</button>
                            </form>
                            <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Parking Mitra</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="ap/vendor/jquery/jquery.min.js"></script>
    <script src="ap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="ap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="ap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="ap/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="ap/js/demo/chart-area-demo.js"></script>
    <script src="ap/js/demo/chart-pie-demo.js"></script>

</body>

</html>