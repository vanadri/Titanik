<div class="row page-titles">
   <div class="col-md-5 align-self-center">
   <h4 class="text-themecolor"><?= $title; ?></h4>
   </div>
   <div class="col-md-7 align-self-center text-right">
      <div class="d-flex justify-content-end align-items-center">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Titanik</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
         </ol>
      </div>
   </div>
</div>


   <div class="row" > 
      <div class="card " style="width:100%">
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                 <form action="<?= base_url().uri_string(); ?>" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="artikel_judul">Judul</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->artikel_judul))? $dtc->artikel_judul: ""; ?>"  type="text" class="form-control" name="artikel_judul">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="email">Isi</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" name="artikel_isi" id="artikel_isi" cols="30" rows="4">
                          <?= (!empty($dtc->artikel_isi))? $dtc->artikel_isi: ""; ?>
                          </textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="artikel_foto">Foto</label>
                        </div>
                        <div class="col-md-9">
                           <input  type="file" class="form-control" name="artikel_foto">
                        </div>
                     </div>
                     <div class="form-group">
                       <div class="row">
                           <div class="col-md-1">
                              <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                           </div>
                           <div class="col-md-2">
                              <a class="btn btn-danger" href="<?= base_url(); ?>admin/artikel">Batal</a>
                           </div>
                       </div>
                     </div>
                 </form>
               </div>
            </div>
         </div>
      </div>
   </div>