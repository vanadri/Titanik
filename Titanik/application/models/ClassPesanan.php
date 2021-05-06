<?php
class pesanan {

    public function pesanan($id, $idPenjual,$idPembeli, $idAdmin, $ongkir, $totalHarga, $statusPesanan) {
        this.$id = id;
        this.$idPenjual = idPenjual;
        this.$idPembeli = idPembeli;
        this.$idAdmin = idAdmin;
        this.$ongkir = ongkir;
        this.$totalHarga = totalHarga;
        this.$statusPesanan = statusPesanan;
    }

    // Method setId dan getId berfungsi untuk mengambil dan mengisi ID ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    // Method setIdPenjual dan getIdPenjual berfungsi untuk mengambil dan mengisi ID Penjual ke dalam objek.
    public function getIdPenjual() {
        return idPenjual;
    }

    public function setIdPenjual($idPenjual) {
        this.$idPenjual = idPenjual;
    }

    // Method setIdPembeli dan getIdPembeli berfungsi untuk mengambil dan mengisi ID Pembeli ke dalam objek.
    public function getIdPembeli() {
        return idPembeli;
    }

    public function setIdPembeli($idPembeli) {
        this.$idPembeli = idPembeli;
    }

    // Method setIdAdmin dan getIdAdmin berfungsi untuk mengambil dan mengisi ID Admin ke dalam objek.
    public function getIdAdmin() {
        return idAdmin;
    }

    public function setIdAdmin($idAdmin) {
        this.$idAdmin = idAdmin;
    }

    // Method setOngkir dan getOngkir berfungsi untuk mengambil dan mengisi Ongkir ke dalam objek.
    public function getOngkir() {
        return ongkir;
    }

    public function setOngkir($ongkir) {
        this.$ongkir = ongkir;
    }

    // Method setTotalHarga dan getTotalHarga berfungsi untuk mengambil dan mengisi Total harga ke dalam objek.
    public function getTotalHarga() {
        return totalHarga;
    }

    public function setTotalHarga($totalHarga) {
        this.$totalHarga = totalHarga;
    }

    // Method setStatusPesanan dan getStatusPesanan berfungsi untuk mengambil dan mengisi Status pesanan ke dalam objek.
    public function getStatusPesanan() {
        return statusPesanan;
    }

    public function setStatusPesanan($statusPesanan) {
        this.$statusPesanan = statusPesanan;
    }

}
?>