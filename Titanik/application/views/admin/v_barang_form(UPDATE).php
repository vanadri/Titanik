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
                           <label for="barang_nama">Nama Barang</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->barang_nama))? $dtc->barang_nama: ""; ?>"  type="text" class="form-control" name="barang_nama">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="barang_desk">Deskripsi</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" name="barang_desk" id="barang_desk" cols="30" rows="4">
                          <?= (!empty($dtc->barang_desk))? $dtc->barang_desk: ""; ?>
                          </textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="barang_harga">Harga</label>
                        </div>
                        <div class="col-md-4">
                           <input value="<?= (!empty($dtc->barang_harga))? $dtc->barang_harga: ""; ?>"  type="text" class="form-control" name="barang_harga">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="barang_qty">Qty</label>
                        </div>
                        <div class="col-md-3">
                           <input value="<?= (!empty($dtc->barang_qty))? $dtc->barang_qty: ""; ?>"  type="number" class="form-control" name="barang_qty">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="barang_berat">Berat</label>
                        </div>
                        <div class="col-md-9">
                          <div class="row">
                              <div class="col-md-4">
                              <input value="<?= (!empty($dtc->barang_berat))? $dtc->barang_berat: ""; ?>"  type="text" class="form-control" name="barang_berat">
                              </div>
                              <div class="col-md-5">
                                 <label>Kilogram</label>
                              </div>
                          </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="barang_foto">Foto</label>
                        </div>
                        <div class="col-md-9">
                           <input  type="file" class="form-control" name="barang_foto">
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