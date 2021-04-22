<?php
class penjual { 

    public function penjual($namapenjual, $id, $idUser, $status, $alamat) {
        this.$namapenjual = namapenjual;
        this.$id = id;
        this.$idUser = idUser;
        this.$status = status;
        this.$alamat = alamat;
    }

    public function getNamapenjual() {
        return namapenjual;
    }

    public function setNamapenjual($namapenjual) {
        this.$namapenjual = namapenjual;
    }

    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    public function getIdUser() {
        return idUser;
    }

    public function setIdUser($idUser) {
        this.$idUser = idUser;
    }

    public function getStatus() {
        return status;
    }

    public function setStatus($status) {
        this.$status = status;
    }

    public function getAlamat() {
        return alamat;
    }

    public function setAlamat($alamat) {
        this.$alamat = alamat;
    }
    
}
?>
