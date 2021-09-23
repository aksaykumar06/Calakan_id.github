<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemuka\n
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "member") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "member";
        // alihkan ke halaman dashboard pegawai
        header("location:program.php");

        // login sebagai pengurus

        // cek jika user login sebagai pengurus
    }else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
?>