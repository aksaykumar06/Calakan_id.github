<?php

// memasukan file koneksi ke database
require 'config/koneksi.php';
// menyimpan variable yang dikirim Form
// $kd_daftar      = $_POST['kd_daftar'];
$nama            = $_POST['nama'];
$email       = $_POST['email'];
$ttl          = $_POST['ttl'];
$jk             = $_POST['jk'];
$alamat         = $_POST['alamat'];
$no_telp        = $_POST['nomor_telepon'];
$password       = $_POST['password'];



if (empty($password)) {
    header('location: regis.php?error=' . base64_encode('Password tidak boleh kosong'));
}
if (empty($email)) {
    header('location: regis.php?error=' . base64_encode('Email tidak boleh kosong'));
}
if (empty($jk)) {
    header('location: regis.php?error=' . base64_encode('Jenis kelamin tidak boleh kosong'));
}
if (empty($alamat)) {
    header('location: regis.php?error=' . base64_encode('Alamat tidak boleh kosong'));
}
if (empty($ttl)) {
    header('location: regis.php?error=' . base64_encode('Tempat tanggal lahir tidak boleh kosong'));
}
if (empty($no_telp)) {
    header('location: regis.php?error=' . base64_encode('Nomor Telepon tidak boleh kosong'));
}
// SQL Insert

$input = mysqli_query($db, "INSERT INTO profile(nama,email,ttl,jk,alamat,nomor_telepon) 
                               VALUES('$nama','$email','$ttl','$jk','$alamat','$no_telp')");
mysqli_query($db, "INSERT INTO users(id,username,
                                     password,
                                     level) 
                               VALUES('','$email',
                                    '$password',
                                    'member')");
if ($input) {
    echo "<script>alert('Insert Data Berhasil'); window.location.href = 'regis.php';</script>";
} else {
    echo "<script>alert('Gagal Membuat User'); window.location.href = 'regis.php';</script>";
}
