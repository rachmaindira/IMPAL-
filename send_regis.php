<?php
if (isset($_POST['nama_lengkap']) && $_POST['nama_lengkap']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_institusi = $_POST['nama_institusi'];
    $nohp = $_POST['nohp'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    
    // validasi apakah password dengan repassword sama
    if ($password != $repassword) { // jika tidak sama
        echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './formregistrasi.php';</script>";   
    }
    else{
        // encryption dengan md5
        // SQL Insert
        $sql = "INSERT INTO user (nama_lengkap, nama_institusi, nohp,level, email, pass) VALUES ('$nama_lengkap','$nama_institusi', '   $nohp', '$level', '$email', '$password')";
        $insert = $koneksi->query($sql);
        if (! $insert) {
            echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './formregistrasi.php';</script>";
        } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './indexlogin.php';</script>";
        }
    }
    // jika gagal
    
}
?>