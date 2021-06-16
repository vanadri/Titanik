<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Titanik">
  <meta name="author" content="Titanik">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/front/images/favicon.png">
  <title>Login : Titanik</title>
  <!-- Custom CSS -->
  <link href="<?= base_url(); ?>assets/node_modules/bootstrap3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/login.css" rel="stylesheet">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="loader">
      <img src="assets/images/loader.svg" alt="loader">
    </div>
  </div>

  <section id="wrapper" class="login-register" style="padding-top:6%;">
    <div class="login-box login-sidebar" style="margin-top:auto !important;">
      <div class="white-box">
        <!-- /.login-logo -->
        <a href="javascript:void(0)" class="text-center db m-b-20">
          <img height="90px" src="<?= base_url(); ?>assets/front/images/logo-full.png" alt="Home" />
        </a>
        <form action="<?= base_url(); ?>adminpanel/login" class="form-horizontal form-material" id="loginform" method="post" accept-charset="utf-8">

          <div class="form-group has-feedback ">
            <div class="col-xs-12">
              <input type="text" name="identity" value="" id="identity" class="form-control" placeholder="Username" autofocus="true" style="border-radius: 10px" />
              <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-feedback ">
            <div class="col-xs-12">
              <input type="password" name="password" value="" id="password" class="form-control" placeholder="Password" style="border-radius: 10px" />
              <span class="glyphicon glyphicon-key form-control-feedback"></span>
            </div>
          </div>
         
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="login-footer">Copyright &copy; <?= date("Y"); ?> Titanik</div>
  </section>

  <!-- jQuery -->
  <script src="<?= base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url(); ?>assets/node_modules/bootstrap3/dist/js/bootstrap.min.js"></script>
  <!--Wave Effects -->
  <script src="<?= base_url(); ?>assets/js/waves.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="<?= base_url(); ?>assets/js/login.min.js"></script>
</body>

</html>
