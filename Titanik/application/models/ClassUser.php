<?php
class user {

    public function user($id, $uniqueCode, $nama, $noHp, $email, $password) {
        this.$id = id;
        this.$uniqueCode = uniqueCode;
        this.$nama = nama;
        this.$noHp = noHp;
        this.$email = email;
        this.$password = password;
    }

    // Method setId dan getId berfungsi untuk mengambil dan mengisi ID ke dalam objek.
    public function getId() {
        return id;
    }

    public function setId($id) {
        this.$id = id;
    }

    // Method setUniqueCode dan getUniqueCode berfungsi untuk mengambil dan mengisi Unique Code ke dalam objek.
    public function getUniqueCode() {
        return uniqueCode;
    }

    public function setUniqueCode($uniqueCode) {
        this.$uniqueCode = uniqueCode;
    }

    // Method setNama dan getNama berfungsi untuk mengambil dan mengisi Nama ke dalam objek.
    public function getNama() {
        return nama;
    }

    public function setNama($nama) {
        this.$nama = nama;
    }

    // Method setNoHp dan getNoHp berfungsi untuk mengambil dan mengisi Nomor Hp ke dalam objek.
    public function getNoHp() {
        return noHp;
    }

    public function setNoHp($noHp) {
        this.$noHp = noHp;
    }

    // Method setEmail dan getEmail berfungsi untuk mengambil dan mengisi Email ke dalam objek.
    public function getEmail() {
        return email;
    }

    public function setEmail($email) {
        this.$email = email;
    }

    // Method setPassword dan getPassword berfungsi untuk mengambil dan mengisi Password ke dalam objek.
    public function getPassword() {
        return password;
    }

    public function setPassword($password) {
        this.$password = password;
    }
 
} 
?>