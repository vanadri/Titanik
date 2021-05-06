<?php
class admin { 

    // fungsi untuk mendeklarasikan variabel
    public function admin($id, $idUser) {
        this.$id = id;
        this.$idUser = idUser;
    }

    // Method setid dan getid berfungsi untuk mengambil dan mengisi ID ke dalam objek.
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
    
}
?>