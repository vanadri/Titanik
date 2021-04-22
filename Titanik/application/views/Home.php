<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <style>
      .navbar{
        width: 100%;
      }
      .jumbotron{
        position: relative;
        width: 1280px;
        height: 620px;
        background: #ffffff;
      }
      .welcome{
        position: absolute;
        width: 520px;
        height: 216px;
        left: 57px;
        top: 180px;
        font-family: Play;
        font-style: normal;
        font-weight: normal;
        font-size: 90px;
        line-height: 108px;
        color: black;
      }
      .welcome2{
        position: absolute;
        width: 441px;
        height: 113px;
        left: 100px;
        top: 280px;
        color: azure;
      }
      .welcome3{
        position: absolute;
        width: 310px;
        height: 56px;
        left: 263px;
        top: 420px;
        font-family: Play;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 28px;
        text-align: right;
        color: #000000;
      }
      .img2{
        position: absolute;
        width: 1280px;
        height: 620px;
        left: 3.01px;
        top: 0px;

      }
      .rectangle2{
        position: absolute;
        width: 528px;
        height: 430px;
        left: 656px;
        top: 75px;
        background: #B49E9E;
      }
      .rectangle1{
        position: absolute;
        width: 528px;
        height: 430px;
        left: 702px;
        top: 44px;
        background: #CCB1B1;
      }
      .jumbotron-dua{
        width: 640px;
      height: 673px;
      background-color:#BA7777;
      }
      .btn-secondary{
        width: 95px;
        height: 40px;
        font-size: 13px;
      }
      .imgfooter{
        position: absolute;
        width: 300px;
        height: 90px;
        left: 490px;
      }
      
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#"><img style="width: 140px;" src="#" alt="">TITANIK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-100 order-4 dual-collapse2" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Artikel.html">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Belanja.html">Belanja</a>
            </li>
              <a class="nav-item nav-link" id="btnlogin" href="#"  data-toggle="modal" data-target="#Loginform" >Akun <img  <img src="<?php echo $this->config->item('base_url'); ?>assets/img/person.png" alt="" style="width: 27px;"></a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>

<!-- ini form login modal-->
<div class="modal fade" id="Loginform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #ffffff; border-radius: 20px;">
      <div class="modal-body">
        <center><img src="<?php echo $this->config->item('base_url'); ?>assets/img/titanik.png" style="width: 300px;" alt="">
        <p style="color: rgb(0, 0, 0);">Silahkan login terlebih dahulu</p></center>
        <form action="">
          <div class="form-group mb-2 ">
            <label style="color: rgb(0, 0, 0);" for="email">Your email</label>
            <input type="email" name="email" id="Form-email" class="form-control validate">
          </div>
          <div class="form-group mb-4">
            <label style="color: rgb(0, 0, 0);" for="password">Password</label>
            <input type="password" name="password"  id="Form-password" class="form-control validate">
          </div>
        </form>
        <div>
          <button style="color: rgb(255, 255, 255);" type="button" id="btnlogin" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
          <p style="text-align: center;">Anda belum punya akun? <a style="color: rgb(0, 0, 0);" href="#" data-toggle="modal"  data-target="#Registerform" data-dismiss="modal">Buat akun!</a></p>
      </div>
    </div>
  </div>
</div>
<!-- -_- -->


<!-- ini form Register modal -->
<div class="modal fade" id="Registerform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #ffffff; border-radius: 20px;">
      <div class="modal-body">
        <center><img src="<?php echo $this->config->item('base_url'); ?>assets/img/titanik.png" style="width: 300px;" alt="">
        <p style="color: rgb(0, 0, 0);">Silahkan Buat akun terlebih dahulu</p></center>
        <form action="<?= base_url();?>index.php/Welcome/register" method="post">
          <div class="row">
            <div class="col">
              <label style="color: rgb(0, 0, 0);" for="first-name">Nama Depan</label>
              <input type="text" name="firstName" id="Form-firstname" class="form-control validate">
            </div>
            <div class="col">
              <label style="color: rgb(0, 0, 0);" for="last-name">Nama Belakang</label>
              <input type="text" name="lastName" id="Form-lastname" class="form-control validate">
            </div>
          </div>
          <div class="form-group mb-2 ">
            <label style="color: rgb(0, 0, 0);" for="email">Email</label>
            <input type="email" name="email" id="Form-email" class="form-control validate">
          </div>
          <div class="form-group mb-2">
            <label style="color: rgb(0, 0, 0);" for="password">Password</label>
            <input type="password" name="password" id="Form-password" class="form-control validate">
          </div>
          <div class="form-group mb-4">
            <label style="color: rgb(0, 0, 0);" for="password">konfirmasi Password</label>
            <input type="password" name="passconf" id="Form-con-password" class="form-control validate">
          </div>
          <div class="text-center mb-3">
          <button style="color: rgb(255, 255, 255);" type="submit" id="btnregis" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
        </form>
        
        <center>
          <p>Anda sudah punya akun? <a style="color: rgb(0, 0, 0);" href="#" data-toggle="modal" data-target="#Loginform" data-dismiss="modal" >Login!</a></p>
        </center>
      </div>
    </div>
  </div>
</div>
<!-- -_- -->

  <center>
    <div class="jumbotron">
    <img src="<?php echo $this->config->item('base_url'); ?>assets/img/sawah.png" alt="" class="img2">
    </div>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3>Kamu Harus Tahu!</h3><hr>
        </div>
      </div><br><br>
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-2 text-center">
        <img src="<?php echo $this->config->item('base_url'); ?>assets/img//bapak.png" alt="" style="height: 446px; width: 371px; left: 100px; ">
        </div>
        <div">
          <br><br><br><br><br><br><br>
          <p>Hari Tani Nasional dirayakan setiap tanggal 24 September, terutama oleh para petani di seluruh Indonesia. 
            Tanggal 24 September ditetapkan sebagai pengingat bahwa pada tanggal itu tahun 1960, Presiden Republik Indonesia 
            Soekarno menetapkan Undang-Undang Nomor 5 Tahun 1960 tentang Peraturan Dasar Pokok-Pokok Agraria.</p>
            <button style="color: rgb(255, 255, 255);" type="button" id="btnregis" class="btn btn-secondary ">Buka Artikel</button>
        </div>

    </div><br><br>
  </center>

      <footer style="background-color: #777777; color: white;" class="main-footer text-center">
        <strong> &copy TITANIK, 2021</strong>
      </footer>
        



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
