<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Tujuan akhir dari bertani bukanlah menumbuhkan tanaman, tetapi untuk menjaga kehidupan. Menjadi seorang petani adalah pilihan, menjadi seorang pembeli adalah keharusan.">
  <title>TITANIK</title>
  <link rel="icon" href="<?= base_url()?>assets/front/images/favicon.png">
  <link rel="stylesheet" href="<?= base_url()?>assets/front/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/front/node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/front/css/custom.css">
  <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
</head>

<body>
  <?php include "_navbar.php" ?>

  <?= $contents; ?>

  <?php include "_footer.php" ?>

  <script src="<?= base_url()?>assets/front/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/front/node_modules/clamp-js/clamp.js"></script>
  <script src="<?= base_url()?>assets/front/js/custom.js"></script>
  <script type="text/javascript">
    function login(){
      let username = $('#username').val();
      let password = $('#password').val();
      let masuk_as = $("input[name='masuk_as']:checked").val();

      // if(username == '') alert('Username wajib di isi !'); return false;
      // if(password == '') alert('Password wajib di isi !'); return false;

      return $.ajax({
                      type: "POST",
                      url:  '<?= base_url(); ?>' + 'user/login',
                      data: {
                        'username': username, 'password' : password, 'masuk_as' : masuk_as
                      },
                      dataType: "JSON",
                      success: function (datax) {
                            if(datax.status){
                                if(masuk_as == "1"){
                                  window.location.href = '<?= base_url(); ?>';
                                }else{
                                  window.location.href = '<?= base_url(); ?>admin/dashboard';
                                }
                            }else{
                              alert(datax.message);
                            }
                      },
                      error: function (jqXHR, textStatus, errorThrown) {
                
                      }
                  });
    }
  </script>
</body>

</html>