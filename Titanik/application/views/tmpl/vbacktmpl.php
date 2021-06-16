<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Titanik">
  <meta name="author" content="Titanik">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/front/images/favicon.png">
  <title>TITANIK</title>
  <!-- Custom CSS -->
  <link href="<?= base_url(); ?>assets/css/style.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
</head>

<body class="skin-blue fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Titanik</p>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header -->
    <!-- ============================================================== -->
    <header class="topbar">
      <?php include "_topbar.php" ?>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <?php include "_sidebar.php" ?>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
       <?= $contents; ?>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-muted">
      Copyright &copy; <?= date("Y"); ?> TITANIK
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="<?= base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url(); ?>assets/node_modules/bootstrap4/dist/js/bootstrap.bundle.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="<?= base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="<?= base_url(); ?>assets/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="<?= base_url(); ?>assets/js/script.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>

</body>

</html>
