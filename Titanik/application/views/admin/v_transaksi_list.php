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
                  <br>
                  <table class="table table-striped table-bordered"
                           width="100%">
                     <thead>
                        <tr>
                           <th style="text-align:center;">No</th>
                           <th style="text-align:center;" >Pembeli</th>
                           <th style="text-align:center;" >Alamat Pengiriman</th>
                           <th style="text-align:center;" >Barang</th>
                           <th style="text-align:center;" >Qty</th>
                           <th style="text-align:center; width: 115px;" >Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $x = 1;
                           foreach ($list as $r) { ?>
                           <tr>
                              <td style="text-align:center;"><?= $x; ?>.</td>
                              <td style="text-align:left;" ><?= $r->nama_pembeli; ?></td>
                              <td style="text-align:left;" ><?= $r->alamat_pengiriman; ?></td>
                              <td style="text-align:left;" ><?= $r->barang_nama; ?></td>
                              <td style="text-align:left;" ><?= $r->qty; ?></td>
                              <td style="text-align:center;" >
                                 <?php if($r->status == 0){ ?>
                                    <a href="<?= base_url() ?>admin/transaksi/is_update/<?= $r->transaksi_id;?>/1" class="btn btn-success">Selesai</a>
                                    <a href="<?= base_url() ?>admin/transaksi/is_update/<?= $r->transaksi_id;?>/2" class="btn btn-danger">Batal</a>
                                 <?php }else{ 
                                    if($r->status == 1){
                                       echo "<i style='color:green;'>Selesai</i>";
                                    }else{
                                       echo "<i style='color:red;'>Dibatalkan</i>";
                                    }
                                 }?>
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