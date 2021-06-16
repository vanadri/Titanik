<?php 
   function tgl_indo($tanggal){
      $bulan = array (
         1 =>   'Januari',
         'Februari',
         'Maret',
         'April',
         'Mei',
         'Juni',
         'Juli',
         'Agustus',
         'September',
         'Oktober',
         'November',
         'Desember'
      );
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
    
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
   }

   function rupiah($angka){
	
      $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
      return $hasil_rupiah;
    
   }
?>