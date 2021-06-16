<nav class="navbar top-navbar navbar-expand-md navbar-dark">
  <!-- ============================================================== -->
  <!-- Logo -->
  <!-- ============================================================== -->
  <div class="navbar-header">
    <a class="navbar-brand" href="./">
      <!-- Logo icon --><b>
        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
        <!-- Dark Logo icon -->
        <img src="<?= base_url(); ?>assets/front/images/favicon.png" alt="homepage" class="dark-logo" />
        <!-- Light Logo icon -->
        <img src="<?= base_url(); ?>assets/front/images/favicon.png" alt="homepage" class="light-logo" style="max-height: 50px;" />
      </b>
      <!--End Logo icon -->
      <!-- Logo text --><span class="m-l-6">
        <!-- dark Logo text -->
        <img src="<?= base_url(); ?>assets/front/images/logo-text.png" class="dark-logo" alt="homepage" height="44px" />
        <!-- Light Logo text -->
        <img src="<?= base_url(); ?>assets/front/images/logo-text.png" class="light-logo" alt="homepage" height="44px" />
      </span>
    </a>
  </div>
  <!-- ============================================================== -->
  <!-- End Logo -->
  <!-- ============================================================== -->
  <div class="navbar-collapse">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav mr-auto">
      <!-- This is  -->
      <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
      <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
    </ul>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <ul class="navbar-nav my-lg-0">
      <!-- ============================================================== -->
      <!-- User Profile -->
      <!-- ============================================================== -->
      <li class="nav-item dropdown u-pro">
        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- <img src="assets/images/users/1.jpg" alt="user" class=""> --> <span class="hidden-md-down"><?= $this->session->userdata('full_name');?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
          <div class="dropdown-menu dropdown-menu-right animated flipInY">
            <!-- text-->
            <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a> -->
            <!-- text-->
            <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Change Password</a> -->
            <!-- text-->
            <div class="dropdown-divider"></div>
            <!-- text-->
            <a href="<?= base_url(); ?>adminpanel/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
            <!-- text-->
          </div>
      </li>
      <!-- ============================================================== -->
      <!-- End User Profile -->
      <!-- ============================================================== -->
    </ul>
  </div>
</nav>
