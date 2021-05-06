<?php
class artikel {

    // fungsi untuk mendeklarasikan variabel
    public function artikel($id, $idadmin,$judulartikel, $isiartikel, $author) {
        this.$id = id;
        this.$idadmin = idadmin;
        this.$judulartikel = judulartikel;
        this.$isiartikel = isiartikel;
        this.$author = author;
    }
    // Method setid dan getid berfungsi untuk mengambil dan mengisi ID ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    // Method setIdadmin dan getIdadmin berfungsi untuk mengambil dan mengisi ID Admin ke dalam objek.
    public function getIdadmin() {
        return idadmin;
    }

    public function setidadmin($idadmin) {
        this.$idadmin = idadmin;
    }

    // Method setJudulartikel dan getJudulartikel berfungsi untuk mengambil dan mengisi Judul Artikel ke dalam objek.
    public function getJudulartikel() {
        return judulartikel;
    }

    public function setJudulartikel($judulartikel) {
        this.$judulartikel = judulartikel;
    }

    // Method setIsiartikel dan getIsiartikel berfungsi untuk mengambil dan mengisi Isi Artikel ke dalam objek.
    public function getIsiartikel() {
        return isiartikel;
    }

    public function setIsiartikel($isiartikel) {
        this.$idAdmin = idAdmin;
    }

    // Method setAuthor dan getAuthor berfungsi untuk mengambil dan mengisi Nama Author ke dalam objek.
    public function getAuthor() {
        return author;
    }

    public function setAuthor($author) {
        this.$author = author;
    }
} 
?>