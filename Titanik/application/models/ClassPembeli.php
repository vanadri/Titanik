<?php
class pembeli {

    public function pembeli($id, $idUser, $status, $alamat) {
        this.$id = id;
        this.$idUser = idUser;
        this.$status = status;
        this.$alamat = alamat;
    }

    // Method setId dan getId berfungsi untuk mengambil dan mengisi ID ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    // Method setIdUser dan getIdUser berfungsi untuk mengambil dan mengisi ID User ke dalam objek.
    public function getIdUser() {
        return idUser;
    }

    public function setIdUser($idUser) {
        this.$idUser = idUser;
    }

    // Method setStatus dan getStatus berfungsi untuk mengambil dan mengisi Status ke dalam objek.
    public function getStatus() {
        return status;
    }

    public function setStatus($status) {
        this.$status = status;
    }

    // Method setAlamat dan getAlamat berfungsi untuk mengambil dan mengisi Alamat ke dalam objek.
    public function getAlamat() {
        return alamat;
    }

    public function setAlamat($alamat) {
        this.$alamat = alamat;
    }
 
} 
?>