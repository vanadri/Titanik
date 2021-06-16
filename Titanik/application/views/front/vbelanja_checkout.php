<div class="container-fluid bg-light p-t-100 p-b-60">
    <h1 class="open-sans-reg text-center m-b-20">Checkout Barang</h1>
    <h5 class="open-sans-reg text-center">Mohon untuk menyelesaikan pembayaran dalam 1x24 jam</h5>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 m-t-40">
          <div class="card rounded shadow-sm p-20">
            <div class="card-body">
              <img class="w-100" src="<?= base_url(); ?>assets/upload/<?= $rows->barang_foto; ?>" alt="Iamge Checkout">
            </div>
          </div>
        </div>
        <div class="col-sm-6 m-t-40">
          <div class="card rounded shadow-sm p-20">
            <div class="card-body">
              <label class="form-label open-sans-bold" for="alamat_pengiriman">Alamat Pengiriman:</label>
              <textarea class="form-control open-sans-reg" name="alamat_pengiriman" id="alamat_pengiriman" rows="4"></textarea>
              <br>
              <label class="form-label open-sans-bold m-b-20">Detail Belanja:</label>
              <div class="detail_belanja p-25">
                <div class="row m-b-30">
                  <div class="col-sm-4">
                    <p class="open-sans-reg">Nama Barang</p>
                  </div>
                  <div class="col-sm-8">
                    <input value="<?= $rows->barang_nama; ?>" class="open-sans-reg form-control" type="text" readonly>
                  </div>
                </div>
                <div class="row m-b-30">
                  <div class="col-sm-4">
                    <p class="open-sans-reg">Jumlah</p>
                  </div>
                  <div class="col-sm-8">
                    <input value="<?= $qty; ?>" class="open-sans-reg form-control" type="text" readonly>
                  </div>
                </div>
                <div class="row m-b-30">
                  <div class="col-sm-4">
                    <p class="open-sans-reg">Berat</p>
                  </div>
                  <div class="col-sm-6">
                    <input value="<?= $rows->barang_berat * $qty; ?>" class="open-sans-reg form-control" type="text" readonly>
                  </div>
                  <div class="col-sm-2">
                    <?= $rows->barang_satuan; ?>
                  </div>
                </div>
                <div class="row m-b-30">
                  <div class="col-sm-4">
                    <p class="open-sans-reg">Total</p>
                  </div>
                  <div class="col-sm-8">
                    <input value="<?= rupiah($rows->barang_harga * $qty); ?>" class="open-sans-reg form-control" type="text" readonly>
                  </div>
                </div>
              </div>
              <br>
              <h1><i class="bi-credit-card"></i></h1>
              <label class="form-label open-sans-bold" for="alamat_pengiriman">Account Number</label>
              <br>
              <a onclick="insert_transaksi()" class="btn btn-success rounded-pill m-t-30 w-100" target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $rows->no_hp; ?>&text=Terimakasih%20sudah%20memesan%20barang%2C%0Aberikut%20barang%20yang%20anda%20pesan%20%3A%0ANama%20Barang%20%3A<?= $rows->barang_nama; ?>%0AJumlah%20%20%20%20%20%20%3A<?= $qty; ?>%0ABerat%20%20%20%20%20%20%20%3A<?= $rows->barang_berat * $qty; ?>%0ATotal%20%20%20%20%20%20%20%3A<?= rupiah($rows->barang_harga * $qty); ?>%0A%0Aakan%20dikirim%20ke%20alamat%20%20%3A%0A%0A%0APesanan%20sudah%20kami%20terima.%20Tunggu%20balasan%20dari%20kami.">Konfirmasi Pembayaran</a>
              <a class="btn btn-secondary rounded-pill m-t-15 w-100" href="<?= base_url(); ?>hbelanja/detail/<?= $rows->barang_id; ?>">Batalkan Pesanan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  function insert_transaksi(){
    let penjual_id = '<?= $rows->penjual_id; ?>';
    let barang_id = '<?= $rows->barang_id; ?>';
    let alamat = $('#alamat_pengiriman').val();
    let qty = '<?= $qty; ?>';

    // if(alamat != ''){
      return $.ajax({
                      type: "POST",
                      url:  '<?= base_url(); ?>' + 'hbelanja/insert_transaksi',
                      data: {
                        'penjual_id': penjual_id, 'barang_id' : barang_id, 'alamat' : alamat, 'qty' : qty
                      },
                      dataType: "JSON",
                      success: function (datax) {
                            console.log(datax);
                            window.location.href ='<?= base_url(); ?>';
                      },
                      error: function (jqXHR, textStatus, errorThrown) {
                
                      }
                  });
    // }else{
    //   alert('Alamat Pengiriman harus di isi !');
    // }
  }
  </script>