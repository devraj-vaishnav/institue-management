<?php
if(isset($_GET['id'])) {
    include "db.php"; 
    $id=$_GET['id'];
    $sql= "SELECT * FROM `emp`  WHERE `id` = $id" ;
    $query = $conn->query( $sql);

    $data=$query->fetch(PDO::FETCH_ASSOC);
   
   

    
}
else{
    echo"id not find";
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

    <title>Add User</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->




            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link" href="emp.php">
                    <i class="fas fa-id-card"></i>
                    <span>Employee</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="emp_detail.php">
                    <i class="	fas fa-id-card"></i>
                    <span>Employee Details</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="att.php">
                    <i class="fa fa-briefcase"></i>
                    <span>Attendance</span></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="att.php">
                    <i class="fa fa-briefcase"></i>
                    <span>Attendance</span></a>
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

                    <h1 class="h4 fw-bold ms-5 text-gray-900 m-4">Update Account!</h1>




                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid mb-5 mt-4">
                <div class="card">
               <div class="card-body">
                    <form method="post" action="emp_update_save.php" >
                    <div class="mb-2">
                            <input type="hidden"  class="form-control" name="id" value="<?php echo $data['id'] ?>"
                                required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3  mb-sm-0">
                                <label>Select Title <span class="text-danger">*</span></label>
                                <select class="form-control  form-select" name="title">
                                    <option   value="<?php echo $data['title'];?>"><?php echo $data['title'];?></option>
                                    <option value="Mr."> Mr.</option>
                                    <option value="Mrs."> Mrs.</option>
                                    <option value="Miss"> Miss.</option>

                                </select>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0">
                                <label>First Name <span class="text-danger">*</span></label>

                                <input type="text" class="form-control form-control-user" name="name"
                                    value="<?php echo $data['name'] ?>" required>
                            </div>
                            <div class="col-sm-5">
                                <label>Last Name<span class="text-danger">*</span></label>

                                <input type="text" class="form-control form-control-user" name="lname"
                                    value="<?php echo $data['lname'] ?>" required>
                            </div>
                        </div>
                        <div class="mb-2 row">

                            <div class="col-sm-6 mb-3 mb-sm-0"">
                      <label>Father Name<span class=" text-danger">*</span></label>
                                <input type="text" class="form-control" name="fname"
                                    value="<?php echo $data['fname'] ?>" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0"">
                      <label>Mother Name</label>
                      <input type=" text" class="form-control" value="<?php echo $data['mname'] ?>" name="mname">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <div class="col-sm-6 mb-3 mb-sm-0"">
                      <label>Mobile Number<span class=" text-danger">*</span></label>
                                <input type="number" class="form-control" name="mnumber"
                                    value="<?php echo $data['mnumber'] ?>" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0"">
                      <label>Whatsapp Number </label>
                      <input type=" number" class="form-control" value="<?php echo $data['wnumber'] ?>" name="wnumber">
                            </div>
                        </div>

                        <div class="mb-2">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="gmail" value="<?php echo $data['gmail'] ?>"
                                required>
                        </div>
                        <div class="mb-3">
                            <label>Residential Address<span class="text-danger">*</span></label>
                            <textarea class="textarea form-control" name="radd"
                                required><?php echo $data['radd'] ?></textarea>
                        </div>

                        <div class="mb-2">
                            <label> Permanent Address</label>
                            <textarea class="textarea form-control" name="padd"><?php echo $data['padd'];?></textarea>
                        </div>

                        <div class="mb-2">
                            <label> Salary</label>
                            <input type="number" class="form-control" name="salary"
                                value="<?php echo $data['salary'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                    </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto mt-5 ">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; object developer 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


<script>
    function box() {
        d = document.getElementById("read").value;
        document.getElementById("show").value = d;
    }
    function button() {
        alert(" Submited  Data");
    }
</script>