<?php

class Komentar {

    #inisialisasi variable/konstruktor
    public function Komentar($id, $idArtikel, $idPembeli, $komentar) {
        this.$id = id;
        this.$idArtikel = idArtikel;
        this.$idPembeli = idPembeli;
        this.$komentar = komentar;
    }

    #method getId dan setId berfungsi untuk mengambil dan mengisi data ke dalam objek
    public function getId() {
        return id;
    }

    public function setId($Id) {
        this.$id = id;
    }

    #method getIdArtikel dan setIdArtikel untuk mengambil dan mengisi data ke dalam objek
    public function getIdArtikel() {
        return idArtikel;
    }

    public function setIdArtikel($IdArtikel) {
        this.$idArtikel = idArtikel;
    }

    #method getidpembeli dan setidpembeli untuk mengambil dan mengisi data ke dalam objek
    public function getIdPembeli() {
        return idPembeli;
    }

    public function setIdPembeli($IdPembeli) {
        this.$idPembeli = idPembeli;
    }

    #method getkomentar dan setkomentar berfungsi untuk mengambil dan mengisi data ke dalam objek
    public function getKomentar() {
        return komentar;
    }

    public function setKomentar($komentar) {
        this.$komentar = komentar;
    }
    
    
    
}



