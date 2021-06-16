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
                           <label for="full_name">Nama</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->full_name))?$dtc->full_name:''; ?>" type="text" class="form-control" name="full_name">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="email">Email</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->email))?$dtc->email:''; ?>" type="text" class="form-control" name="email">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="no_hp">No. Hp</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->no_hp))?$dtc->no_hp:''; ?>" type="text" class="form-control" name="no_hp">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="username">Username</label>
                        </div>
                        <div class="col-md-9">
                           <input value="<?= (!empty($dtc->username))?$dtc->username:''; ?>" type="text" class="form-control" name="username">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3">
                           <label for="password">Password</label>
                        </div>
                        <div class="col-md-9">
                           <input placeholder="Kosongkan jika tidak ingin merubah password" type="password" class="form-control" name="password">
                        </div>
                     </div>
                     <div class="form-group">
                       <div class="row">
                           <div class="col-md-1">
                              <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                           </div>
                           <div class="col-md-2">
                              <a class="btn btn-danger" href="<?= base_url(); ?>admin/user_admin">Batal</a>
                           </div>
                       </div>
                     </div>
                 </form>
               </div>
            </div>
         </div>
      </div>
   </div>