<div class="container-fluid bg-light p-t-76 p-b-60">
    <div class="row">
      <div class="col-sm-12 m-t-40">
        <div class="card rounded shadow-sm">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4 text-center">
                <img src="<?= base_url(); ?>assets/upload/<?= $rows->barang_foto;?>" class="card-img-top m-b-30" alt="Cover Image Artikel">
                <h5 class="puritan-reg m-b-15"><i class="bi-shop-window"></i> <?= $rows->nama_toko;?></h5>
                <h5 class="puritan-reg"><i class="bi-geo-alt"></i> <?= $rows->alamat;?></h5>
              </div>
              <div class="col-sm-8">
              <h1 class="pt-serif-caption-reg"><?= $rows->barang_nama;?> <i hidden class="bi-heart float-end cursor-pointer" onclick="toggle_wishlist(this)"></i></h1>
              <hr>
              <div class="row">
                <div class="col-sm-2">
                  <p class="text-muted puritan-reg">Harga</p>
                </div>
                <div class="col-sm-10">
                  <h4 class="pt-serif-caption-reg"><?= rupiah($rows->barang_harga);?>/<?= $rows->barang_satuan;?></h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-2">
                  <p class="text-muted puritan-reg">Jumlah</p>
                </div>
                <div class="col-sm-10">
                  <p class="pt-serif-caption-reg">Stok terbatas < <?= $rows->barang_qty;?></p>
                  <input type="hidden" id="barang_qty" value="<?= $rows->barang_qty; ?>">
                  <button id="btn_min" onClick="tambah_min(2)" class="btn btn-secondary btn-sm m-b-6">-</button>
                  <input style="text-align:center;" readonly value="0" id="inp_jml" type="text" class="form-control w-8 d-inline pt-serif-caption-reg">
                  <input type="hidden" id="barang_id" value="<?= $rows->barang_id; ?>">
                  <input type="hidden" id="user_id" value="<?= $this->session->userdata('user_id'); ?>">
                  <button id="btn_plush" onClick="tambah_min(1)" class="btn btn-primary btn-sm m-b-6">+</button>
                </div>
              </div>
              <hr>
              <p class="text-muted puritan-reg">Deskripsi Produk</p>
              <p class="card-text quat-reg"><?= $rows->barang_desk;?></p>
              
              <a class="btn btn-success btn-lg float-end w-20 quat-reg" onClick="next_checkt()">Pesan</a>
              </div>
            </div>
          </div>            
        </div>
      </div>
    </div>
  </div>

  <script>
  let barang_id =  $('#barang_id').val();
  let user_id =  $('#user_id').val();
  let qty =  $('#barang_qty').val();
  
  
  function tambah_min(tipe){
    let inp_jml =  $('#inp_jml').val();
      
      let hasil = 0;
      if(tipe == 1){
        if(inp_jml < parseInt(qty)){
          hasil = (parseInt(inp_jml) + 1);

          $('#inp_jml').val(hasil);
        }
      }else{
        hasil = (parseInt(inp_jml) - 1);
        if(hasil < 0 ){
          hasil = 0;
        }  

        $('#inp_jml').val(hasil);
      }

    
  }

  function next_checkt(){
    let qtyx =  $('#inp_jml').val();
    url="<?= base_url(); ?>hbelanja/checkout/<?= $rows->barang_id; ?>/"+qtyx;
    if(user_id != ""){
      window.location.href = url;
    }else{
      alert("Login terlebih dahulu !");
    }
  }
  </script>