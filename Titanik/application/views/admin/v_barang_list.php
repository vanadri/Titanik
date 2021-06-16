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
                  <a href="<?= base_url(); ?>admin/barang/is_form" class="btn btn-primary">Tambah</a>
                  <br>
                  <br>
                  <table class="table table-striped table-bordered"
                           width="100%">
                     <thead>
                        <tr>
                           <th style="text-align:center;">No</th>
                           <th style="text-align:center;" >Nama Toko</th>
                           <th style="text-align:center;" >Nama Barang</th>
                           <th style="text-align:center;" >Qty</th>
                           <th style="text-align:center;" >Harga</th>
                           <th style="text-align:center;" >Berat</th>
                           <th style="text-align:center; width: 115px;" >Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $x = 1;
                           foreach ($list as $r) { ?>
                           <tr>
                              <td style="text-align:center;"><?= $x; ?>.</td>
                              <td style="text-align:left;" ><?= $r->nama_toko; ?></td>
                              <td style="text-align:left;" ><?= $r->barang_nama; ?></td>
                              <td style="text-align:left;" ><?= $r->barang_qty; ?></td>
                              <td style="text-align:left;" ><?= $r->barang_harga; ?></td>
                              <td style="text-align:left;" ><?= $r->barang_berat; ?></td>
                              <td style="text-align:center;" >
                                 <a href="<?= base_url() ?>admin/barang/is_form/<?= $r->barang_id;?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                 <a href="<?= base_url() ?>admin/barang/is_delete/<?= $r->barang_id;?>" class="btn btn-secondary"><i class="fa fa-trash"></i></a>
                              </td>
                           </tr>
                        <?php $x++; } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>