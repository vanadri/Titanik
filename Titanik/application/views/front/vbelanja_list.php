<div class="container-fluid bg-light p-t-76 p-b-60">
    <div class="container">
      <div class="row">
        
        <?php foreach($list as $r){ ?>
          <div class="col-sm-4 m-t-40">
            <div class="card rounded shadow-sm">
              <img src="<?= base_url(); ?>assets/upload/<?= $r->barang_foto; ?>" class="card-img-top object-fit-cover" alt="Cover Image List Belanja" height="250px">
              <div class="card-body">
                <p class="card-text quat-reg"><small class="text-danger"><?= $r->nama_toko; ?></small></p>
                <h3 class="card-title quat-reg text-center"><?= $r->barang_nama; ?></h3>
                <h3 class="card-title quat-reg text-center"><?= rupiah($r->barang_harga); ?></h3>
                <p class="card-text text-center m-t-20"><a href="<?= base_url(); ?>hbelanja/detail/<?= $r->barang_id; ?>" class="card-link text-danger quat-reg text-decoration-none">Lihat ></a></p>
              </div>
            </div>
          </div>
        <?php } ?>
        
      </div>
    </div>
  </div>