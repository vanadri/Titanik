<?php
class ulasan {

    public function ulasan($id, $idProduk, $idPembeli, $rating, $ulasan) {
        this.$id = id;
        this.$idProduk = idProduk;
        this.$idPembeli = idPembeli;
        this.$rating = rating;
        this.$ulasan = ulasan;
    }

    // Method setId dan getId berfungsi untuk mengambil dan mengisi ID ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    // Method setIdProduk dan getIdProduk berfungsi untuk mengambil dan mengisi ID Produk ke dalam objek.
    public function getIdProduk() {
        return idProduk;
    }

    public function setIdProduk($idProduk) {
        this.$idProduk = idProduk;
    }

    // Method setIdPembeli dan getIdPembeli berfungsi untuk mengambil dan mengisi ID Pembeli ke dalam objek.
    public function getIdPembeli() {
        return idPembeli;
    }

    public function setIdPembeli($idPembeli) {
        this.$idPembeli = idPembeli;
    }

    // Method setRating dan getRating berfungsi untuk mengambil dan mengisi Rating ke dalam objek.
    public function getRating() {
        return rating;
    }

    public function setRating($rating) {
        this.$rating = rating;
    }

    // Method setUlasan dan getUlasan berfungsi untuk mengambil dan mengisi Ulasan ke dalam objek.
    public function getUlasan() {
        return ulasan;
    }

    public function setUlasan($ulasan) {
        this.$ulasan = ulasan;
    }
 
} 
?>