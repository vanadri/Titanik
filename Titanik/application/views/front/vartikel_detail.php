<div class="container-fluid bg-light p-t-76 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 m-t-40">
          <div class="card rounded shadow-sm p-t-60 p-b-60 p-l-100 p-r-100">
            <h1 class="open-sans-reg text-center m-b-30"><?= $rows->artikel_judul; ?></h1>
            <img src="<?= base_url(); ?>assets/upload/<?= $rows->artikel_foto; ?>" class="card-img-top" alt="Cover Image Artikel">
            <div class="card-body">
              <p class="card-text quat-reg"><small class="text-muted"><i class="bi-calendar-event"></i> <?= tgl_indo(date('Y-m-d', strtotime($rows->artikel_tgl))); ?></small></p>
            
              <p class="card-text quat-reg"><?= $rows->artikel_isi; ?></p>
              
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>