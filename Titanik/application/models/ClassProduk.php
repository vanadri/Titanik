<?php
class Produk {
    
    public function Produk($idproduk, $idpenjual, $namaproduk, $hargaproduk, $deskripsi, $stockproduk) {
        this.$idproduk = idproduk;
        this.$idpenjual = idpenjual;
        this.$namaproduk = namaproduk;
        this.$hargaproduk = hargaproduk;
        this.$deskripsi = deskripsi;
        this.$stockproduk = stockproduk;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi ID Produk ke dalam objek.
    public function getIdproduk() {
        return idproduk;
    }

    public function setIdproduk($idproduk) {
        this.$idproduk = idproduk;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi ID Penjual ke dalam objek.
    public function getIdpenjual() {
        return idpenjual;
    }

    public function setIdpenjual($idpenjual) {
        this.$idpenjual = idpenjual;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi Nama Produk ke dalam objek.
    public function getNamaproduk() {
        return namaproduk;
    }

    public function setNamaproduk($namaproduk) {
        this.$namaproduk = namaproduk;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi Harga Produk ke dalam objek.
    public function getHargaproduk() {
        return hargaproduk;
    }

    public function setHargaproduk($hargaproduk) {
        this.$hargaproduk = hargaproduk;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi Deksripsi ke dalam objek.
    public function getDeskripsi() {
        return deskripsi;
    }

    public function setDeskripsi($deskripsi) {
        this.$deskripsi = deskripsi;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi banyaknya Stock Produk ke dalam objek.
    public function getStockproduk() {
        return stockproduk;
    }

    public function setStockproduk($stockproduk) {
        this.$stockproduk = stockproduk;
    }
    
}