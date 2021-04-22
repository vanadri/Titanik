<?php
class pesanan {

    public function pesanan($id, $idPenjual,$idPembeli, $idAdmin, $ongkir, $totalHarga, $statusPesanan, $createDate, $updateDate, $deleteDate) {
        this.$id = id;
        this.$idPenjual = idPenjual;
        this.$idPembeli = idPembeli;
        this.$idAdmin = idAdmin;
        this.$ongkir = ongkir;
        this.$totalHarga = totalHarga;
        this.$statusPesanan = statusPesanan;
        this.$createDate = createDate;
        this.$updateDate = updateDate;
        this.$deleteDate = deleteDate;
    }

    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    public function getIdPenjual() {
        return idPenjual;
    }

    public function setIdPenjual($idPenjual) {
        this.$idPenjual = idPenjual;
    }

    public function getIdPembeli() {
        return idPembeli;
    }

    public function setIdPembeli($idPembeli) {
        this.$idPembeli = idPembeli;
    }

    public function getIdAdmin() {
        return idAdmin;
    }

    public function setIdAdmin($idAdmin) {
        this.$idAdmin = idAdmin;
    }


    public function getOngkir() {
        return ongkir;
    }

    public function setOngkir($ongkir) {
        this.$ongkir = ongkir;
    }

    public function getTotalHarga() {
        return totalHarga;
    }

    public function setTotalHarga($totalHarga) {
        this.$totalHarga = totalHarga;
    }

    public function getStatusPesanan() {
        return statusPesanan;
    }

    public function setStatusPesanan($statusPesanan) {
        this.$statusPesanan = statusPesanan;
    }

    public function getCreateDate() {
        return createDate;
    }

    public function setCreateDate($createDate) {
        this.$createDate = createDate;
    }

    public function getUpdateDate() {
        return updateDate;
    }

    public function setUpdateDate($updateDate) {
        this.$updateDate = updateDate;
    }

    public function getDeleteDate() {
        return deleteDate;
    }

    public function setDeleteDate($deleteDate) {
        this.$deleteDate = deleteDate;
    }
 
} 
?>