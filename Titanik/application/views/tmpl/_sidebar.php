<li>
  <a class="waves-effect waves-dark" href="<?= base_url(); ?>admin/dashboard" aria-expanded="false">
    <i class="fa fa-tachometer-alt"></i>
    <span class="hide-menu">Dashboard Utama</span>
  </a>
</li>
<?php if($this->session->userdata('status') == 'admin'){ ?>
  <li>
  <a class="waves-effect waves-dark" href="<?= base_url();?>admin/user_admin" aria-expanded="false">
    <i class="fa fa-users"></i>
    <span class="hide-menu">Admin List</span>
  </a>
</li>
<li>
  <a class="waves-effect waves-dark" href="<?= base_url();?>admin/artikel" aria-expanded="false">
    <i class="fa fa-copy"></i>
    <span class="hide-menu">Artikel</span>
  </a>
</li>
<li>
  <a class="waves-effect waves-dark" href="<?= base_url();?>admin/user_pembeli" aria-expanded="false">
    <i class="fa fa-user"></i>
    <span class="hide-menu">Pembeli</span>
  </a>
</li>
<li>
  <a class="waves-effect waves-dark" href="<?= base_url();?>admin/user_penjual" aria-expanded="false">
    <i class="fa fa-user"></i>
    <span class="hide-menu">Penjual</span>
  </a>
</li>
<?php } else { ?>
  <li>
    <a class="waves-effect waves-dark" href="<?= base_url();?>admin/user_penjual" aria-expanded="false">
      <i class="fa fa-user"></i>
      <span class="hide-menu">Penjual</span>
    </a>
  </li>
  <li>
    <a class="waves-effect waves-dark" href="<?= base_url();?>admin/barang" aria-expanded="false">
      <i class="fa fa-cube"></i>
      <span class="hide-menu">List Barang</span>
    </a>
  </li>
  <li>
    <a class="waves-effect waves-dark" href="<?= base_url();?>admin/transaksi" aria-expanded="false">
      <i class="fa fa-dollar"></i>
      <span class="hide-menu">Konfirmasi Transaksi</span>
    </a>
  </li>
<?php } ?>
