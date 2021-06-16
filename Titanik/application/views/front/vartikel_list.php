<div class="container-fluid bg-light p-t-76 p-b-60">
    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < $list_cnt; $i++) : ?>
        <div class="col-sm-4 m-t-40">
          <a href="<?= base_url(); ?>hartikel/detail/<?= $list[$i]->artikel_id?>" class="text-dark text-decoration-none">
            <div class="card rounded shadow-sm p-20">
              <img src="<?= base_url(); ?>assets/upload/<?= $list[$i]->artikel_foto; ?>" class="card-img-top" alt="Cover Image Artikel">
              <div class="card-body">
                <h5 class="card-title pt-serif-bold judul_artikel"><?= $list[$i]->artikel_judul; ?></h5>
                <p class="card-text quat-reg body_artikel"><?= $list[$i]->artikel_isi; ?></p>
                <p class="card-text text-end quat-reg"><small class="text-muted"><?= tgl_indo(date('Y-m-d', strtotime($list[$i]->artikel_tgl))); ?></small></p>
              </div>
            </div>
          </a>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>