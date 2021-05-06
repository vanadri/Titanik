<?php

class DetailPesanan {
    #deklarasi variable/constructor
    public function DetailPesanan($id, $idPesanan, $idProduk, $hargaProduk, $jumlahProduk) {
        this.$id = id;
        this.$idPesanan = idPesanan;
        this.$idProduk = idProduk;
        this.$hargaProduk = hargaProduk;
        this.$jumlahProduk = jumlahProduk;
    }
    // Method setid dan getid berfungsi untuk mengambil dan mengisi data ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {  
        this.$id = id;
    }

    // Method setidPesanan dan getidPesanan berfungsi untuk mengambil dan mengisi data ke dalam objek.
    public function getIdPesanan() {
        return idPesanan;
    }

    public function  setIdPesanan($idPesanan) {
        this.$idPesanan = idPesanan;
    }

    // Method setidproduk dan getidproduk berfungsi untuk mengambil dan mengisi data ke dalam objek.
    public function getIdProduk() {
        return idProduk;
    }

    public function  setIdProduk($idProduk) {
        this.$idProduk = idProduk;
    }

    // Method sethargaproduk dan gethargaproduk berfungsi untuk mengambil dan mengisi data ke dalam objek.
    public function getHargaProduk() {
        return hargaProduk;
    }

    public function  setHargaProduk($hargaProduk) {
        this.$hargaProduk = hargaProduk;
    }

    // Method setjumlahproduk dan getjumlahproduk berfungsi untuk mengambil dan mengisi data ke dalam objek.
    public function getJumlahProduk() {
        return jumlahProduk;
    }

    public function  setJumlahProduk($jumlahProduk) {
        this.$jumlahProduk = jumlahProduk;
    }
    
}
?>