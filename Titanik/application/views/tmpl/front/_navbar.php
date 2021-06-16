<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
    <div class="container-fluid">
      <a class="navbar-brand quantico-reg" href="<?= base_url(); ?>"  onclick="set_active('beranda')">TITANIK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url(); ?>" onclick="set_active('beranda')">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>hartikel" onclick="set_active('artikel')">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>hbelanja" onclick="set_active('belanja')">Belanja</a>
          </li>
          <?php if(empty($this->session->userdata('user_id'))){ ?>
            <li class="nav-item dropstart">
              <a class="nav-link" href="javascript:void(0)" id="akunDropdown" role="button" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" aria-expanded="false">
                Akun <i class="bi-person-circle"></i>
              </a>
              <div id="akun_dropdown" class="dropdown-menu" aria-labelledby="akunDropdown">
                <div class="row p-t-10 p-b-10 p-l-50 p-r-50">
                  <div id="form_login" class="col-sm-12">
                    <form>
                      <div class="text-center">
                        <img class="w-80 m-b-10" src="<?= base_url()?>assets/front/images/logo-full.png" alt="Logo TITANIK">
                      </div>
                      <p class="text-center pt-serif-caption-reg">Silahkan login ke akun Anda</p>
                      <label for="username" class="form-label pt-serif-caption-reg">Username/Email</label>
                      <input type="text" class="form-control" id="username" name="username">
                      <label for="password" class="form-label pt-serif-caption-reg m-t-10">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      <br>
                      <p class="text-center pt-serif-caption-reg">Masuk sebagai</p>
                      <div class="row">
                        <div class="col-sm-6 text-end">
                          <div class="form-check d-inline-block pt-serif-caption-reg">
                            <input class="form-check-input" value="1" type="radio" id="flexRadioDefault1" name="masuk_as" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Pembeli
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-check d-inline-block pt-serif-caption-reg">
                            <input class="form-check-input" value="2" type="radio" id="flexRadioDefault2" name="masuk_as">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Penjual
                            </label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <button id="btn_login" onclick="login()" type="button" class="btn btn-primary w-100 pt-serif-caption-reg m-b-10">Masuk</button>
                      <div class="text-center">
                        <a href="javascript:void(0)" class="text-center pt-serif-caption-italic text-decoration-none text-dark" onclick="toggle_login_daftar('daftar')">Belum punya akun? Daftar</a>
                      </div>
                    </form>
                  </div>
                  <div id="form_daftar" class="col-sm-12">
                    <form action="<?= base_url(); ?>user/register" method="post">
                      <div class="text-center">
                        <img class="w-80 m-b-10" src="<?= base_url()?>assets/front/images/logo-full.png" alt="Logo TITANIK">
                      </div>
                      <p class="text-center pt-serif-caption-reg">Silahkan buat akun Anda</p>
                      <label for="nama_depan" class="form-label pt-serif-caption-reg">Nama Depan</label>
                      <input type="text" required class="form-control" id="nama_depan" name="nama_depan">
                      <label for="nama_belakang" class="form-label pt-serif-caption-reg m-t-10">Nama Belakang</label>
                      <input type="text" required class="form-control" name="nama_belakang" id="nama_belakang">
                      <label for="username" class="form-label pt-serif-caption-reg m-t-10">Username</label>
                      <input type="text" required class="form-control" name="username" id="username">
                      <label for="password_daftar" class="form-label pt-serif-caption-reg m-t-10">Password</label>
                      <input type="password" required class="form-control" name="password" id="password_daftar">
                      <label hidden for="konfirmasi_password_daftar" class="form-label pt-serif-caption-reg m-t-10">Konfirmasi Password</label>
                      <input hidden type="password" class="form-control" id="konfirmasi_password_daftar">
                      
                      <p class="text-center pt-serif-caption-reg m-t-10 m-b-10">Daftar sebagai</p>
                      <div class="row">
                        <div class="col-sm-6 text-end">
                          <div class="form-check d-inline-block pt-serif-caption-reg">
                            <input class="form-check-input" value="1" type="radio" name="masuk_as" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Pembeli
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-check d-inline-block pt-serif-caption-reg">
                            <input class="form-check-input" value="2" type="radio" name="masuk_as" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Penjual
                            </label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <button  id="btn_register" class="btn btn-primary w-100 pt-serif-caption-reg m-b-10">Buat Akun</button>
                      <div class="text-center">
                        <a href="javascript:void(0)" class="text-center pt-serif-caption-italic text-decoration-none text-dark" onclick="toggle_login_daftar('login')">Sudah punya akun? Masuk</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </li>
          <?php } else{ ?>
          

          <li class="nav-item dropstart">
          <div id="form_daftar" class="col-sm-12"></div>
            <a class="nav-link" href="javascript:void(0)" id="logoutDropdown" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-expanded="false">
              <?= $this->session->userdata('full_name');?> <i class="bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="logoutDropdown">
              <li class="nav-item">
                <a href="<?= base_url() ?>user/logout" class="nav-link"><i class="bi-box-arrow-right"></i> Keluar</a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>